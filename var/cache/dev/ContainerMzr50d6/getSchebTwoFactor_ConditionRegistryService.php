<?php

namespace ContainerMzr50d6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_ConditionRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'scheb_two_factor.condition_registry' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Condition\TwoFactorConditionRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->privates['scheb_two_factor.condition_registry'] = $container->createProxy('TwoFactorConditionRegistryGhostD09c223', static fn () => \TwoFactorConditionRegistryGhostD09c223::createLazyGhost(static fn ($proxy) => self::do($container, $proxy)));
        }

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Condition'.\DIRECTORY_SEPARATOR.'TwoFactorConditionRegistry.php';

        return ($lazyLoad->__construct(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['scheb_two_factor.authenticated_token_condition'] ?? $container->load('getSchebTwoFactor_AuthenticatedTokenConditionService'));
            yield 1 => ($container->privates['scheb_two_factor.ip_whitelist_condition'] ?? $container->load('getSchebTwoFactor_IpWhitelistConditionService'));
            yield 2 => ($container->privates['App\\Security\\TwoFactorCondition'] ?? $container->load('getTwoFactorConditionService'));
        }, 3)) && false ?: $lazyLoad);
    }
}
