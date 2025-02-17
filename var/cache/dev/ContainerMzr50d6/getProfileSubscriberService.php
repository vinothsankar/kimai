<?php

namespace ContainerMzr50d6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfileSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\ProfileSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\ProfileSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventSubscriber'.\DIRECTORY_SEPARATOR.'ProfileSubscriber.php';

        return $container->privates['App\\EventSubscriber\\ProfileSubscriber'] = new \App\EventSubscriber\ProfileSubscriber(($container->privates['App\\Utils\\ProfileManager'] ??= new \App\Utils\ProfileManager()));
    }
}
