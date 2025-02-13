<?php

namespace ContainerHQVrSX0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PIhhX2lService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PIhhX2l' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PIhhX2l'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'paramFetcher' => ['privates', 'fos_rest.request.param_fetcher', 'getFosRest_Request_ParamFetcherService', false],
            'timesheet' => ['privates', '.errored..service_locator.PIhhX2l.App\\Entity\\Timesheet', NULL, 'Cannot autowire service ".service_locator.PIhhX2l": it needs an instance of "App\\Entity\\Timesheet" but this type has been excluded in "config/services.yaml".'],
        ], [
            'paramFetcher' => '?',
            'timesheet' => 'App\\Entity\\Timesheet',
        ]);
    }
}
