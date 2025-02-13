<?php

namespace ContainerMzr50d6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportingServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Reporting\ReportingService' shared autowired service.
     *
     * @return \App\Reporting\ReportingService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Reporting'.\DIRECTORY_SEPARATOR.'ReportingService.php';

        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['App\\Reporting\\ReportingService'])) {
            return $container->privates['App\\Reporting\\ReportingService'];
        }
        $b = ($container->services['jms_serializer.authorization_checker'] ?? self::getJmsSerializer_AuthorizationCheckerService($container));

        if (isset($container->privates['App\\Reporting\\ReportingService'])) {
            return $container->privates['App\\Reporting\\ReportingService'];
        }

        return $container->privates['App\\Reporting\\ReportingService'] = new \App\Reporting\ReportingService($a, $b);
    }
}
