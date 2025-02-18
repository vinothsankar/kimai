<?php

/*
 * This file is part of the Kimai time-tracking app.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller\Reporting;

use App\Controller\AbstractController;
use App\Entity\User;
use App\Model\DailyStatistic;
use App\Model\DateStatisticInterface;
use App\Model\Statistic\StatisticDate;
use App\Repository\ActivityRepository;
use App\Repository\ProjectRepository;
use App\Timesheet\TimesheetStatisticService;
use DateTimeInterface;

use App\Entity\Project;

abstract class AbstractUserReportController extends AbstractController
{
    public function __construct(protected TimesheetStatisticService $statisticService, private ProjectRepository $projectRepository, private ActivityRepository $activityRepository)
    {
    }

    protected function canSelectUser(): bool
    {
        // also found in App\EventSubscriber\Actions\UserSubscriber
        if (!$this->isGranted('view_other_timesheet') || !$this->isGranted('view_other_reporting')) {
            return false;
        }

        return true;
    }

    protected function getStatisticDataRaw(DateTimeInterface $begin, DateTimeInterface $end, User $user): array
    {
        return $this->statisticService->getDailyStatisticsGrouped($begin, $end, [$user]);
    }

    protected function createStatisticModel(DateTimeInterface $begin, DateTimeInterface $end, User $user): DateStatisticInterface
    {
        return new DailyStatistic($begin, $end, $user);
    }

    protected function prepareReport(DateTimeInterface $begin, DateTimeInterface $end, User $user): array
    {
        
        $startDate = $begin->format('Y-m-d');  // Convert to string
        $endDate = $end->format('Y-m-d');

        $projectData = $this->projectRepository->getDailyProjectData($user->getId(), $startDate, $endDate);

        $transformedData = [];
        $dateWiseData = []; // Temporary array to group by date

        foreach ($projectData as $entry) {
            $workdate = $entry['workdate'];  // This will match the alias you used in the query: 'DATE(t.start_time) AS date'
            $weekday = $entry['weekday'];
            $projectName = $entry['project_name'];
            $secondsWorked = $entry['total_duration'];   // This is in seconds
            $jiraIds = $entry['jira_ids'];  
            $description = $entry['description']; 
            $component = $entry['component'];

            // Convert seconds to hours
            $hoursWorked = (int) ($secondsWorked / 3600);

            if (!isset($dateWiseData[$workdate])) {
                $dateWiseData[$workdate] = [
                    'workdate' => (new \DateTime($workdate))->format('j-M-Y'), // Format the date to '1-Jan-2025'
                    'weekday' => $weekday,
                    'name' => $user->getUsername(),
                    'hours' => 0,
                    'projects' => [],
                    'jira_ids' => [],
                    'descriptions' => [],
                    'components' => [],
                ];
            }

            $dateWiseData[$workdate]['hours'] += $hoursWorked;
            $dateWiseData[$workdate]['projects'][$projectName] = $projectName;
            $dateWiseData[$workdate]['jira_ids'][] = $jiraIds;
            $dateWiseData[$workdate]['descriptions'][] = $description;
            $dateWiseData[$workdate]['components'][] = $component;
        }

        // Transform grouped data to the final format
        foreach ($dateWiseData as $entry) {
            $transformedData[] = [
                'name' => $entry['name'],
                'workdate' => $entry['workdate'],
                'weekday' => $entry['weekday'],
                'hours' => $entry['hours'],
                'projects' => implode(', ', $entry['projects']),
                'jira_ids' => implode(', ', $entry['jira_ids']),
                'descriptions' => implode(', ', $entry['descriptions']),
                'components' => implode(', ', $entry['components']),
            ];
        }

        return $transformedData;
    }

    protected function prepareAllUsersReport(array $userIds, string $startDate, string $endDate, ?Project $project = null): array
    {
        $projectData = $this->projectRepository->getAllUsersProjectData($userIds, $startDate, $endDate, $project);

        $reportData = [];
        
        // Collect all dates for the reporting period
        $dates = [];
        $current = new \DateTime($startDate);
        $endDt = new \DateTime($endDate);
        while ($current <= $endDt) {
            $dates[] = $current->format('Y-m-d');
            $current->modify('+1 day');
        }

        // Step 1: Group data by user
        foreach ($projectData as $entry) {
            $username = $entry['username'];
            $role = $entry['role'] ?? 'N/A';
            $workdate = $entry['workdate'];
            $onsiteDuration = (int)$entry['onsite_duration'];
            $offsiteDuration = (int)$entry['offsite_duration'];
            $totalDuration = (int)$entry['total_duration'];

            if (!isset($reportData[$username])) {
                $reportData[$username] = [
                    'name'       => $username,
                    'role'       => $role,
                    'total_work' => 0,
                    'onsite'     => 0,
                    'offsite'    => 0,
                    'daily'      => array_fill_keys($dates, 0)
                ];
            }

            // Accumulate totals
            $reportData[$username]['total_work'] += $totalDuration;
            $reportData[$username]['onsite'] += $onsiteDuration;
            $reportData[$username]['offsite'] += $offsiteDuration;

            // Store daily duration
            if (isset($reportData[$username]['daily'][$workdate])) {
                $reportData[$username]['daily'][$workdate] += $totalDuration;
            }
        }

        // Step 2: Prepare the final pivot report
        $finalReport = [];

        foreach ($reportData as $userRow) {
            $row = [
                'name'       => $userRow['name'],
                'role'       => $userRow['role'],
                'total_work' => $userRow['total_work'],
                'onsite'     => $userRow['onsite'],
                'offsite'    => $userRow['offsite'],
            ];

            // Add daily columns
            foreach ($dates as $date) {
                $row[$date] = $userRow['daily'][$date];
            }

            $finalReport[] = $row;
        }

        return $finalReport;

    }


    }
