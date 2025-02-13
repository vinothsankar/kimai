<?php

namespace ContainerHQVrSX0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLogoutSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\LogoutSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\LogoutSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventSubscriber'.\DIRECTORY_SEPARATOR.'LogoutSubscriber.php';

        return $container->privates['App\\EventSubscriber\\LogoutSubscriber'] = new \App\EventSubscriber\LogoutSubscriber(($container->privates['App\\Security\\SessionHandler'] ?? $container->load('getSessionHandlerService')), ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)));
    }
}
