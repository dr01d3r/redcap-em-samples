<?php
// Set the namespace defined in your config file
namespace ExampleModules\PSR4\ExternalModule;

// The next 2 lines should always be included and be the same in every module
use ExternalModules\AbstractExternalModule;
use ExternalModules\ExternalModules;
use ExampleModules\PSR4\Classes\TestClass1;

require_once 'vendor/autoload.php';

/**
 * Class ExternalModule
 * @package ExampleModules\PSR4\ExternalModule
 * @property \ExternalModules\FrameworkVersion3\Framework $framework
 */
class ExternalModule extends AbstractExternalModule {
    public function __construct()
    {
        parent::__construct();
        define("MODULE_DOCROOT", $this->getModulePath());
    }

    public function doTests() {
        TestClass1::doTests();
    }
}