<?php

namespace ContainerHQVrSX0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MNvbWrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MNvb_wr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MNvb_wr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'activity' => ['privates', '.errored..service_locator.MNvb_wr.App\\Entity\\Activity', NULL, 'Cannot autowire service ".service_locator.MNvb_wr": it needs an instance of "App\\Entity\\Activity" but this type has been excluded in "config/services.yaml".'],
            'rateRepository' => ['privates', 'App\\Repository\\ActivityRateRepository', 'getActivityRateRepositoryService', true],
            'statisticService' => ['privates', 'App\\Activity\\ActivityStatisticService', 'getActivityStatisticServiceService', true],
            'teamRepository' => ['privates', 'App\\Repository\\TeamRepository', 'getTeamRepositoryService', true],
        ], [
            'activity' => 'App\\Entity\\Activity',
            'rateRepository' => 'App\\Repository\\ActivityRateRepository',
            'statisticService' => 'App\\Activity\\ActivityStatisticService',
            'teamRepository' => 'App\\Repository\\TeamRepository',
        ]);
    }
}
