<?php
// Set the namespace defined in your config file
namespace ExampleModules\BasicPlugin;

// The next 2 lines should always be included and be the same in every module
use ExternalModules\AbstractExternalModule;
use ExternalModules\ExternalModules;


/**
 * Class BasicPlugin
 * @package ExampleModules\BasicPlugin
 */
class BasicPlugin extends AbstractExternalModule {

    public function __construct()
    {
        parent::__construct();
    }

    public function displayAlert($msg, $type = "info") {
        echo "<div class='alert alert-$type'>$msg</div>";
    }

    public function displayDebug($debug) {

        if (is_array($debug) || is_object($debug)) {
            echo "<pre>" . print_r($debug, true) . "</pre>";
        } else {
            echo "<pre>$debug</pre>";
        }
    }
}