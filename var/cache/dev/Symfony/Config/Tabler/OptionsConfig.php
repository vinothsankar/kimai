<?php

namespace Symfony\Config\Tabler;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OptionsConfig 
{
    private $darkMode;
    private $assetVersion;
    private $headerDark;
    private $navbarDark;
    private $navbarCondensed;
    private $navbarOverlap;
    private $boxedLayout;
    private $rtlMode;
    private $userMenuCondensed;
    private $logoUrl;
    private $securityCoverUrl;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function darkMode($value): static
    {
        $this->_usedProperties['darkMode'] = true;
        $this->darkMode = $value;

        return $this;
    }

    /**
     * @default 1738667188
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function assetVersion($value): static
    {
        $this->_usedProperties['assetVersion'] = true;
        $this->assetVersion = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function headerDark($value): static
    {
        $this->_usedProperties['headerDark'] = true;
        $this->headerDark = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function navbarDark($value): static
    {
        $this->_usedProperties['navbarDark'] = true;
        $this->navbarDark = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function navbarCondensed($value): static
    {
        $this->_usedProperties['navbarCondensed'] = true;
        $this->navbarCondensed = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function navbarOverlap($value): static
    {
        $this->_usedProperties['navbarOverlap'] = true;
        $this->navbarOverlap = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function boxedLayout($value): static
    {
        $this->_usedProperties['boxedLayout'] = true;
        $this->boxedLayout = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function rtlMode($value): static
    {
        $this->_usedProperties['rtlMode'] = true;
        $this->rtlMode = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function userMenuCondensed($value): static
    {
        $this->_usedProperties['userMenuCondensed'] = true;
        $this->userMenuCondensed = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function logoUrl($value): static
    {
        $this->_usedProperties['logoUrl'] = true;
        $this->logoUrl = $value;

        return $this;
    }

    /**
     * @default 'https://placehold.co/1000'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function securityCoverUrl($value): static
    {
        $this->_usedProperties['securityCoverUrl'] = true;
        $this->securityCoverUrl = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('dark_mode', $value)) {
            $this->_usedProperties['darkMode'] = true;
            $this->darkMode = $value['dark_mode'];
            unset($value['dark_mode']);
        }

        if (array_key_exists('asset_version', $value)) {
            $this->_usedProperties['assetVersion'] = true;
            $this->assetVersion = $value['asset_version'];
            unset($value['asset_version']);
        }

        if (array_key_exists('header_dark', $value)) {
            $this->_usedProperties['headerDark'] = true;
            $this->headerDark = $value['header_dark'];
            unset($value['header_dark']);
        }

        if (array_key_exists('navbar_dark', $value)) {
            $this->_usedProperties['navbarDark'] = true;
            $this->navbarDark = $value['navbar_dark'];
            unset($value['navbar_dark']);
        }

        if (array_key_exists('navbar_condensed', $value)) {
            $this->_usedProperties['navbarCondensed'] = true;
            $this->navbarCondensed = $value['navbar_condensed'];
            unset($value['navbar_condensed']);
        }

        if (array_key_exists('navbar_overlap', $value)) {
            $this->_usedProperties['navbarOverlap'] = true;
            $this->navbarOverlap = $value['navbar_overlap'];
            unset($value['navbar_overlap']);
        }

        if (array_key_exists('boxed_layout', $value)) {
            $this->_usedProperties['boxedLayout'] = true;
            $this->boxedLayout = $value['boxed_layout'];
            unset($value['boxed_layout']);
        }

        if (array_key_exists('rtl_mode', $value)) {
            $this->_usedProperties['rtlMode'] = true;
            $this->rtlMode = $value['rtl_mode'];
            unset($value['rtl_mode']);
        }

        if (array_key_exists('user_menu_condensed', $value)) {
            $this->_usedProperties['userMenuCondensed'] = true;
            $this->userMenuCondensed = $value['user_menu_condensed'];
            unset($value['user_menu_condensed']);
        }

        if (array_key_exists('logo_url', $value)) {
            $this->_usedProperties['logoUrl'] = true;
            $this->logoUrl = $value['logo_url'];
            unset($value['logo_url']);
        }

        if (array_key_exists('security_cover_url', $value)) {
            $this->_usedProperties['securityCoverUrl'] = true;
            $this->securityCoverUrl = $value['security_cover_url'];
            unset($value['security_cover_url']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['darkMode'])) {
            $output['dark_mode'] = $this->darkMode;
        }
        if (isset($this->_usedProperties['assetVersion'])) {
            $output['asset_version'] = $this->assetVersion;
        }
        if (isset($this->_usedProperties['headerDark'])) {
            $output['header_dark'] = $this->headerDark;
        }
        if (isset($this->_usedProperties['navbarDark'])) {
            $output['navbar_dark'] = $this->navbarDark;
        }
        if (isset($this->_usedProperties['navbarCondensed'])) {
            $output['navbar_condensed'] = $this->navbarCondensed;
        }
        if (isset($this->_usedProperties['navbarOverlap'])) {
            $output['navbar_overlap'] = $this->navbarOverlap;
        }
        if (isset($this->_usedProperties['boxedLayout'])) {
            $output['boxed_layout'] = $this->boxedLayout;
        }
        if (isset($this->_usedProperties['rtlMode'])) {
            $output['rtl_mode'] = $this->rtlMode;
        }
        if (isset($this->_usedProperties['userMenuCondensed'])) {
            $output['user_menu_condensed'] = $this->userMenuCondensed;
        }
        if (isset($this->_usedProperties['logoUrl'])) {
            $output['logo_url'] = $this->logoUrl;
        }
        if (isset($this->_usedProperties['securityCoverUrl'])) {
            $output['security_cover_url'] = $this->securityCoverUrl;
        }

        return $output;
    }

}
