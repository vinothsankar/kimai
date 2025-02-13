<?php

namespace ContainerHQVrSX0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQuickEntryControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\QuickEntryController' shared autowired service.
     *
     * @return \App\Controller\QuickEntryController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'QuickEntryController.php';

        $container->services['App\\Controller\\QuickEntryController'] = $instance = new \App\Controller\QuickEntryController(($container->privates['App\\Configuration\\SystemConfiguration'] ?? self::getSystemConfigurationService($container)), ($container->privates['App\\Timesheet\\TimesheetService'] ?? $container->load('getTimesheetServiceService')), ($container->privates['App\\Repository\\TimesheetRepository'] ?? $container->load('getTimesheetRepositoryService')), ($container->privates['App\\Timesheet\\FavoriteRecordService'] ?? $container->load('getFavoriteRecordServiceService')));

        $instance->setContainer(($container->privates['.service_locator.ibacmod'] ?? $container->load('get_ServiceLocator_IbacmodService'))->withContext('App\\Controller\\QuickEntryController', $container));

        return $instance;
    }
}
