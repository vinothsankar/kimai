<?php

namespace ContainerMzr50d6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMenuServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Utils\MenuService' shared autowired service.
     *
     * @return \App\Utils\MenuService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Utils'.\DIRECTORY_SEPARATOR.'MenuService.php';

        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['App\\Utils\\MenuService'])) {
            return $container->privates['App\\Utils\\MenuService'];
        }
        $b = ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService'));

        if (isset($container->privates['App\\Utils\\MenuService'])) {
            return $container->privates['App\\Utils\\MenuService'];
        }

        return $container->privates['App\\Utils\\MenuService'] = new \App\Utils\MenuService($a, $b);
    }
}
