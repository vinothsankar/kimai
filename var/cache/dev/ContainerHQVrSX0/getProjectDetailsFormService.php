<?php

namespace ContainerHQVrSX0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProjectDetailsFormService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Reporting\ProjectDetails\ProjectDetailsForm' shared autowired service.
     *
     * @return \App\Reporting\ProjectDetails\ProjectDetailsForm
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Reporting'.\DIRECTORY_SEPARATOR.'ProjectDetails'.\DIRECTORY_SEPARATOR.'ProjectDetailsForm.php';

        return $container->privates['App\\Reporting\\ProjectDetails\\ProjectDetailsForm'] = new \App\Reporting\ProjectDetails\ProjectDetailsForm();
    }
}
