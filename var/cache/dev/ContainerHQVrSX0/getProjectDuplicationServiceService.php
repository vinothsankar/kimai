<?php

namespace ContainerHQVrSX0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProjectDuplicationServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Project\ProjectDuplicationService' shared autowired service.
     *
     * @return \App\Project\ProjectDuplicationService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Project'.\DIRECTORY_SEPARATOR.'ProjectDuplicationService.php';

        $a = ($container->privates['App\\Project\\ProjectService'] ?? $container->load('getProjectServiceService'));

        if (isset($container->privates['App\\Project\\ProjectDuplicationService'])) {
            return $container->privates['App\\Project\\ProjectDuplicationService'];
        }

        return $container->privates['App\\Project\\ProjectDuplicationService'] = new \App\Project\ProjectDuplicationService($a, ($container->privates['App\\Repository\\ActivityRepository'] ?? $container->load('getActivityRepositoryService')), ($container->privates['App\\Repository\\ProjectRateRepository'] ?? $container->load('getProjectRateRepositoryService')), ($container->privates['App\\Repository\\ActivityRateRepository'] ?? $container->load('getActivityRateRepositoryService')));
    }
}
