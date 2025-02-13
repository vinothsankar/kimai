<?php

namespace ContainerHQVrSX0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMenuSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\MenuSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\MenuSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventSubscriber'.\DIRECTORY_SEPARATOR.'MenuSubscriber.php';

        $a = ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService'));

        if (isset($container->privates['App\\EventSubscriber\\MenuSubscriber'])) {
            return $container->privates['App\\EventSubscriber\\MenuSubscriber'];
        }

        return $container->privates['App\\EventSubscriber\\MenuSubscriber'] = new \App\EventSubscriber\MenuSubscriber($a, ($container->privates['tabler_bundle.context_helper'] ?? self::getTablerBundle_ContextHelperService($container)));
    }
}
