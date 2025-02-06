<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Tabler'.\DIRECTORY_SEPARATOR.'OptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Tabler'.\DIRECTORY_SEPARATOR.'KnpMenuConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Tabler'.\DIRECTORY_SEPARATOR.'RoutesConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class TablerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $options;
    private $knpMenu;
    private $routes;
    private $icons;
    private $_usedProperties = [];

    /**
     * @default {"dark_mode":false,"asset_version":1738667188,"header_dark":false,"navbar_dark":false,"navbar_condensed":true,"navbar_overlap":false,"boxed_layout":true,"rtl_mode":false,"user_menu_condensed":false,"logo_url":null,"security_cover_url":"https:\/\/placehold.co\/1000"}
    */
    public function options(array $value = []): \Symfony\Config\Tabler\OptionsConfig
    {
        if (null === $this->options) {
            $this->_usedProperties['options'] = true;
            $this->options = new \Symfony\Config\Tabler\OptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "options()" has already been initialized. You cannot pass values the second time you call options().');
        }

        return $this->options;
    }

    /**
     * @default {"enable":false,"main_menu":"tabler_main","breadcrumb_menu":false}
    */
    public function knpMenu(array $value = []): \Symfony\Config\Tabler\KnpMenuConfig
    {
        if (null === $this->knpMenu) {
            $this->_usedProperties['knpMenu'] = true;
            $this->knpMenu = new \Symfony\Config\Tabler\KnpMenuConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "knpMenu()" has already been initialized. You cannot pass values the second time you call knpMenu().');
        }

        return $this->knpMenu;
    }

    /**
     * @default {"tabler_welcome":"home","tabler_login":"login","tabler_logout":"logout","tabler_login_check":"login_check","tabler_registration":null,"tabler_registration_register":null,"tabler_password_reset":null,"tabler_password_reset_sent":null}
    */
    public function routes(array $value = []): \Symfony\Config\Tabler\RoutesConfig
    {
        if (null === $this->routes) {
            $this->_usedProperties['routes'] = true;
            $this->routes = new \Symfony\Config\Tabler\RoutesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "routes()" has already been initialized. You cannot pass values the second time you call routes().');
        }

        return $this->routes;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function icons(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['icons'] = true;
        $this->icons = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'tabler';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = new \Symfony\Config\Tabler\OptionsConfig($value['options']);
            unset($value['options']);
        }

        if (array_key_exists('knp_menu', $value)) {
            $this->_usedProperties['knpMenu'] = true;
            $this->knpMenu = new \Symfony\Config\Tabler\KnpMenuConfig($value['knp_menu']);
            unset($value['knp_menu']);
        }

        if (array_key_exists('routes', $value)) {
            $this->_usedProperties['routes'] = true;
            $this->routes = new \Symfony\Config\Tabler\RoutesConfig($value['routes']);
            unset($value['routes']);
        }

        if (array_key_exists('icons', $value)) {
            $this->_usedProperties['icons'] = true;
            $this->icons = $value['icons'];
            unset($value['icons']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options->toArray();
        }
        if (isset($this->_usedProperties['knpMenu'])) {
            $output['knp_menu'] = $this->knpMenu->toArray();
        }
        if (isset($this->_usedProperties['routes'])) {
            $output['routes'] = $this->routes->toArray();
        }
        if (isset($this->_usedProperties['icons'])) {
            $output['icons'] = $this->icons;
        }

        return $output;
    }

}
