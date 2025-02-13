<?php

namespace ContainerMzr50d6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_Manager_ApiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.manager.api' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticatorManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticatorManager.php';

        $a = ($container->privates['debug.security.event_dispatcher.api'] ?? $container->load('getDebug_Security_EventDispatcher_ApiService'));

        if (isset($container->privates['security.authenticator.manager.api'])) {
            return $container->privates['security.authenticator.manager.api'];
        }

        return $container->privates['security.authenticator.manager.api'] = new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([($container->privates['App\\API\\Authentication\\TokenAuthenticator'] ?? $container->load('getTokenAuthenticatorService')), ($container->privates['security.authenticator.access_token.api'] ?? $container->load('getSecurity_Authenticator_AccessToken_ApiService'))], ($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), $a, 'api', ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)), true, true, []);
    }
}
