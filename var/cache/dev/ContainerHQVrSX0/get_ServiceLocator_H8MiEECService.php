<?php

namespace ContainerHQVrSX0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H8MiEECService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.h8MiEEC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.h8MiEEC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'activity' => ['privates', '.errored..service_locator.h8MiEEC.App\\Entity\\Activity', NULL, 'Cannot autowire service ".service_locator.h8MiEEC": it needs an instance of "App\\Entity\\Activity" but this type has been excluded in "config/services.yaml".'],
            'paramFetcher' => ['privates', 'fos_rest.request.param_fetcher', 'getFosRest_Request_ParamFetcherService', false],
        ], [
            'activity' => 'App\\Entity\\Activity',
            'paramFetcher' => '?',
        ]);
    }
}
