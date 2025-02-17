<?php

namespace ContainerHQVrSX0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProjectDetailsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Reporting\ProjectDetailsController' shared autowired service.
     *
     * @return \App\Controller\Reporting\ProjectDetailsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Reporting'.\DIRECTORY_SEPARATOR.'ProjectDetailsController.php';

        $container->services['App\\Controller\\Reporting\\ProjectDetailsController'] = $instance = new \App\Controller\Reporting\ProjectDetailsController();

        $instance->setContainer(($container->privates['.service_locator.ibacmod'] ?? $container->load('get_ServiceLocator_IbacmodService'))->withContext('App\\Controller\\Reporting\\ProjectDetailsController', $container));

        return $instance;
    }
}
