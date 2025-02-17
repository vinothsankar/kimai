<?php

namespace ContainerMzr50d6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_Security_Totp_ProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'scheb_two_factor.security.totp.provider' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\Totp\TotpAuthenticatorTwoFactorProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'TwoFactorProviderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-totp'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'Totp'.\DIRECTORY_SEPARATOR.'TotpAuthenticatorTwoFactorProvider.php';

        $a = ($container->privates['scheb_two_factor.security.totp.default_form_renderer'] ?? $container->load('getSchebTwoFactor_Security_Totp_DefaultFormRendererService'));

        if (isset($container->privates['scheb_two_factor.security.totp.provider'])) {
            return $container->privates['scheb_two_factor.security.totp.provider'];
        }

        return $container->privates['scheb_two_factor.security.totp.provider'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\Totp\TotpAuthenticatorTwoFactorProvider(($container->services['scheb_two_factor.security.totp_authenticator'] ?? $container->load('getSchebTwoFactor_Security_TotpAuthenticatorService')), $a);
    }
}
