<?php

namespace ContainerHQVrSX0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_TwigExtension_SerializerRuntimeHelperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'jms_serializer.twig_extension.serializer_runtime_helper' shared service.
     *
     * @return \JMS\Serializer\Twig\SerializerRuntimeHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'SerializerRuntimeHelper.php';

        $a = ($container->services['jms_serializer'] ?? self::getJmsSerializerService($container));

        if (isset($container->privates['jms_serializer.twig_extension.serializer_runtime_helper'])) {
            return $container->privates['jms_serializer.twig_extension.serializer_runtime_helper'];
        }

        return $container->privates['jms_serializer.twig_extension.serializer_runtime_helper'] = new \JMS\Serializer\Twig\SerializerRuntimeHelper($a);
    }
}
