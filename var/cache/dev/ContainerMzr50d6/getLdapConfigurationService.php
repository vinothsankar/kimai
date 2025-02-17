<?php

namespace ContainerMzr50d6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLdapConfigurationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Configuration\LdapConfiguration' shared autowired service.
     *
     * @return \App\Configuration\LdapConfiguration
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Configuration'.\DIRECTORY_SEPARATOR.'LdapConfiguration.php';

        $a = ($container->privates['App\\Configuration\\SystemConfiguration'] ?? self::getSystemConfigurationService($container));

        if (isset($container->privates['App\\Configuration\\LdapConfiguration'])) {
            return $container->privates['App\\Configuration\\LdapConfiguration'];
        }

        return $container->privates['App\\Configuration\\LdapConfiguration'] = new \App\Configuration\LdapConfiguration($a);
    }
}
