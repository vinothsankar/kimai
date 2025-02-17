<?php

namespace ContainerMzr50d6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSystemConfigurationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\SystemConfigurationController' shared autowired service.
     *
     * @return \App\Controller\SystemConfigurationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'SystemConfigurationController.php';

        $container->services['App\\Controller\\SystemConfigurationController'] = $instance = new \App\Controller\SystemConfigurationController(($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)), ($container->privates['App\\Configuration\\ConfigurationService'] ?? self::getConfigurationServiceService($container)), ($container->privates['App\\Configuration\\SystemConfiguration'] ?? self::getSystemConfigurationService($container)), ($container->privates['App\\Timesheet\\LockdownService'] ?? $container->load('getLockdownServiceService')));

        $instance->setContainer(($container->privates['.service_locator.ibacmod'] ?? $container->load('get_ServiceLocator_IbacmodService'))->withContext('App\\Controller\\SystemConfigurationController', $container));

        return $instance;
    }
}
