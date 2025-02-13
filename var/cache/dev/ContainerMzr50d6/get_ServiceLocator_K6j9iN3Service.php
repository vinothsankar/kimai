<?php

namespace ContainerMzr50d6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K6j9iN3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.K6j9iN3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.K6j9iN3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'csrfTokenManager' => ['privates', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', true],
            'project' => ['privates', '.errored..service_locator.K6j9iN3.App\\Entity\\Project', NULL, 'Cannot autowire service ".service_locator.K6j9iN3": it needs an instance of "App\\Entity\\Project" but this type has been excluded in "config/services.yaml".'],
            'rateRepository' => ['privates', 'App\\Repository\\ProjectRateRepository', 'getProjectRateRepositoryService', true],
            'statisticService' => ['privates', 'App\\Project\\ProjectStatisticService', 'getProjectStatisticServiceService', true],
            'teamRepository' => ['privates', 'App\\Repository\\TeamRepository', 'getTeamRepositoryService', true],
        ], [
            'csrfTokenManager' => '?',
            'project' => 'App\\Entity\\Project',
            'rateRepository' => 'App\\Repository\\ProjectRateRepository',
            'statisticService' => 'App\\Project\\ProjectStatisticService',
            'teamRepository' => 'App\\Repository\\TeamRepository',
        ]);
    }
}
