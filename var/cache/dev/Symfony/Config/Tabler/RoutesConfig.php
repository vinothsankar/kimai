<?php

namespace Symfony\Config\Tabler;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class RoutesConfig 
{
    private $tablerWelcome;
    private $tablerLogin;
    private $tablerLogout;
    private $tablerLoginCheck;
    private $tablerRegistration;
    private $tablerRegistrationRegister;
    private $tablerPasswordReset;
    private $tablerPasswordResetSent;
    private $_usedProperties = [];

    /**
     * name of the homepage route
     * @default 'home'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tablerWelcome($value): static
    {
        $this->_usedProperties['tablerWelcome'] = true;
        $this->tablerWelcome = $value;

        return $this;
    }

    /**
     * name of the form login route
     * @default 'login'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tablerLogin($value): static
    {
        $this->_usedProperties['tablerLogin'] = true;
        $this->tablerLogin = $value;

        return $this;
    }

    /**
     * name of the logout route
     * @default 'logout'
     * @param ParamConfigurator|mixed $value
     * @deprecated The child node "tabler_logout" at path "routes" is deprecated.
     * @return $this
     */
    public function tablerLogout($value): static
    {
        $this->_usedProperties['tablerLogout'] = true;
        $this->tablerLogout = $value;

        return $this;
    }

    /**
     * name of the form login_check route
     * @default 'login_check'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tablerLoginCheck($value): static
    {
        $this->_usedProperties['tablerLoginCheck'] = true;
        $this->tablerLoginCheck = $value;

        return $this;
    }

    /**
     * name of the user registration form route
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tablerRegistration($value): static
    {
        $this->_usedProperties['tablerRegistration'] = true;
        $this->tablerRegistration = $value;

        return $this;
    }

    /**
     * name of the user registration form processing route
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tablerRegistrationRegister($value): static
    {
        $this->_usedProperties['tablerRegistrationRegister'] = true;
        $this->tablerRegistrationRegister = $value;

        return $this;
    }

    /**
     * name of the forgot-password form route
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tablerPasswordReset($value): static
    {
        $this->_usedProperties['tablerPasswordReset'] = true;
        $this->tablerPasswordReset = $value;

        return $this;
    }

    /**
     * name of the sent forgot-password email form route
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tablerPasswordResetSent($value): static
    {
        $this->_usedProperties['tablerPasswordResetSent'] = true;
        $this->tablerPasswordResetSent = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('tabler_welcome', $value)) {
            $this->_usedProperties['tablerWelcome'] = true;
            $this->tablerWelcome = $value['tabler_welcome'];
            unset($value['tabler_welcome']);
        }

        if (array_key_exists('tabler_login', $value)) {
            $this->_usedProperties['tablerLogin'] = true;
            $this->tablerLogin = $value['tabler_login'];
            unset($value['tabler_login']);
        }

        if (array_key_exists('tabler_logout', $value)) {
            $this->_usedProperties['tablerLogout'] = true;
            $this->tablerLogout = $value['tabler_logout'];
            unset($value['tabler_logout']);
        }

        if (array_key_exists('tabler_login_check', $value)) {
            $this->_usedProperties['tablerLoginCheck'] = true;
            $this->tablerLoginCheck = $value['tabler_login_check'];
            unset($value['tabler_login_check']);
        }

        if (array_key_exists('tabler_registration', $value)) {
            $this->_usedProperties['tablerRegistration'] = true;
            $this->tablerRegistration = $value['tabler_registration'];
            unset($value['tabler_registration']);
        }

        if (array_key_exists('tabler_registration_register', $value)) {
            $this->_usedProperties['tablerRegistrationRegister'] = true;
            $this->tablerRegistrationRegister = $value['tabler_registration_register'];
            unset($value['tabler_registration_register']);
        }

        if (array_key_exists('tabler_password_reset', $value)) {
            $this->_usedProperties['tablerPasswordReset'] = true;
            $this->tablerPasswordReset = $value['tabler_password_reset'];
            unset($value['tabler_password_reset']);
        }

        if (array_key_exists('tabler_password_reset_sent', $value)) {
            $this->_usedProperties['tablerPasswordResetSent'] = true;
            $this->tablerPasswordResetSent = $value['tabler_password_reset_sent'];
            unset($value['tabler_password_reset_sent']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['tablerWelcome'])) {
            $output['tabler_welcome'] = $this->tablerWelcome;
        }
        if (isset($this->_usedProperties['tablerLogin'])) {
            $output['tabler_login'] = $this->tablerLogin;
        }
        if (isset($this->_usedProperties['tablerLogout'])) {
            $output['tabler_logout'] = $this->tablerLogout;
        }
        if (isset($this->_usedProperties['tablerLoginCheck'])) {
            $output['tabler_login_check'] = $this->tablerLoginCheck;
        }
        if (isset($this->_usedProperties['tablerRegistration'])) {
            $output['tabler_registration'] = $this->tablerRegistration;
        }
        if (isset($this->_usedProperties['tablerRegistrationRegister'])) {
            $output['tabler_registration_register'] = $this->tablerRegistrationRegister;
        }
        if (isset($this->_usedProperties['tablerPasswordReset'])) {
            $output['tabler_password_reset'] = $this->tablerPasswordReset;
        }
        if (isset($this->_usedProperties['tablerPasswordResetSent'])) {
            $output['tabler_password_reset_sent'] = $this->tablerPasswordResetSent;
        }

        return $output;
    }

}
