<?php

namespace ContainerHQVrSX0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PTqacAmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pTqacAm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pTqacAm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'csrfTokenManager' => ['privates', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', true],
            'invoice' => ['privates', '.errored..service_locator.pTqacAm.App\\Entity\\Invoice', NULL, 'Cannot autowire service ".service_locator.pTqacAm": it needs an instance of "App\\Entity\\Invoice" but this type has been excluded in "config/services.yaml".'],
        ], [
            'csrfTokenManager' => '?',
            'invoice' => 'App\\Entity\\Invoice',
        ]);
    }
}
