<?php

namespace ExampleModules\PSR4\Classes;

use ExampleModules\PSR4\Traits\TestTrait1;
use ExampleModules\PSR4\Traits\TestTrait2;

class TestClass1 {
    use TestTrait1;
    use TestTrait2;

    public static function doTests() {
        self::displayDebug("Executing tests withing class: " . __CLASS__);
        self::test1();
        self::test2();
    }

    public static function displayDebug($debug) {
        if (is_array($debug) || is_object($debug)) {
            echo "<pre>" . print_r($debug, true) . "</pre>";
        } else {
            echo "<pre>$debug</pre>";
        }
    }
}