<?php

namespace ContainerHQVrSX0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FWlULpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.f_wlULp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.f_wlULp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'customerService' => ['privates', 'App\\Customer\\CustomerService', 'getCustomerServiceService', true],
        ], [
            'customerService' => 'App\\Customer\\CustomerService',
        ]);
    }
}
