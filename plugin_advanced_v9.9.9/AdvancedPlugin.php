<?php
// Set the namespace defined in your config file
namespace ExampleModules\AdvancedPlugin;

// The next 2 lines should always be included and be the same in every module
use ExternalModules\AbstractExternalModule;
use ExternalModules\ExternalModules;
use ExampleModules\AdvancedPlugin\Traits\HtmlUtils;

require_once 'vendor/autoload.php';

/**
 * Class AdvancedPlugin
 * @package ExampleModules\AdvancedPlugin
 */
class AdvancedPlugin extends AbstractExternalModule {
    use HtmlUtils;

    public function __construct()
    {
        parent::__construct();
        define("MODULE_DOCROOT", $this->getModulePath());
        $this->initializeSmarty();
    }
}