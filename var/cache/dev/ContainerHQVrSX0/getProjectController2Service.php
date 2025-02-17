<?php

namespace ContainerHQVrSX0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProjectController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProjectController' shared autowired service.
     *
     * @return \App\Controller\ProjectController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ProjectController.php';

        $container->services['App\\Controller\\ProjectController'] = $instance = new \App\Controller\ProjectController(($container->privates['App\\Repository\\ProjectRepository'] ?? $container->load('getProjectRepositoryService')), ($container->privates['App\\Configuration\\SystemConfiguration'] ?? self::getSystemConfigurationService($container)), ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)), ($container->privates['App\\Project\\ProjectService'] ?? $container->load('getProjectServiceService')));

        $instance->setContainer(($container->privates['.service_locator.ibacmod'] ?? $container->load('get_ServiceLocator_IbacmodService'))->withContext('App\\Controller\\ProjectController', $container));

        return $instance;
    }
}
