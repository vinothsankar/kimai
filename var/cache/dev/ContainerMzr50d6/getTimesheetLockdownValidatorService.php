<?php

namespace ContainerMzr50d6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTimesheetLockdownValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Validator\Constraints\TimesheetLockdownValidator' shared autowired service.
     *
     * @return \App\Validator\Constraints\TimesheetLockdownValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Constraints'.\DIRECTORY_SEPARATOR.'TimesheetLockdownValidator.php';

        $a = ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService'));

        if (isset($container->privates['App\\Validator\\Constraints\\TimesheetLockdownValidator'])) {
            return $container->privates['App\\Validator\\Constraints\\TimesheetLockdownValidator'];
        }

        return $container->privates['App\\Validator\\Constraints\\TimesheetLockdownValidator'] = new \App\Validator\Constraints\TimesheetLockdownValidator($a, ($container->privates['App\\Timesheet\\LockdownService'] ?? $container->load('getLockdownServiceService')));
    }
}
