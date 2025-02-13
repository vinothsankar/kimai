<?php

namespace ContainerMzr50d6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JNCcCQkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jNCcCQk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jNCcCQk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'project' => ['privates', '.errored..service_locator.jNCcCQk.App\\Entity\\Project', NULL, 'Cannot autowire service ".service_locator.jNCcCQk": it needs an instance of "App\\Entity\\Project" but this type has been excluded in "config/services.yaml".'],
            'projectRepository' => ['privates', 'App\\Repository\\ProjectRepository', 'getProjectRepositoryService', true],
            'team' => ['privates', '.errored..service_locator.jNCcCQk.App\\Entity\\Team', NULL, 'Cannot autowire service ".service_locator.jNCcCQk": it needs an instance of "App\\Entity\\Team" but this type has been excluded in "config/services.yaml".'],
        ], [
            'project' => 'App\\Entity\\Project',
            'projectRepository' => 'App\\Repository\\ProjectRepository',
            'team' => 'App\\Entity\\Team',
        ]);
    }
}
