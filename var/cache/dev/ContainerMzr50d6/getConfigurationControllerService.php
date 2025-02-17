<?php

namespace ContainerMzr50d6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigurationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\API\ConfigurationController' shared autowired service.
     *
     * @return \App\API\ConfigurationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'API'.\DIRECTORY_SEPARATOR.'BaseApiController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'API'.\DIRECTORY_SEPARATOR.'ConfigurationController.php';

        $container->services['App\\API\\ConfigurationController'] = $instance = new \App\API\ConfigurationController(($container->services['fos_rest.view_handler'] ?? self::getFosRest_ViewHandlerService($container)));

        $instance->setContainer(($container->privates['.service_locator.ADQFtKj'] ?? $container->load('get_ServiceLocator_ADQFtKjService'))->withContext('App\\API\\ConfigurationController', $container));

        return $instance;
    }
}
