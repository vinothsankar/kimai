<?php

namespace ContainerMzr50d6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomerServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Customer\CustomerService' shared autowired service.
     *
     * @return \App\Customer\CustomerService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Customer'.\DIRECTORY_SEPARATOR.'CustomerService.php';

        $a = ($container->privates['debug.validator'] ?? self::getDebug_ValidatorService($container));

        if (isset($container->privates['App\\Customer\\CustomerService'])) {
            return $container->privates['App\\Customer\\CustomerService'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['App\\Customer\\CustomerService'])) {
            return $container->privates['App\\Customer\\CustomerService'];
        }

        return $container->privates['App\\Customer\\CustomerService'] = new \App\Customer\CustomerService(($container->privates['App\\Repository\\CustomerRepository'] ?? $container->load('getCustomerRepositoryService')), ($container->privates['App\\Configuration\\SystemConfiguration'] ?? self::getSystemConfigurationService($container)), $a, $b);
    }
}
