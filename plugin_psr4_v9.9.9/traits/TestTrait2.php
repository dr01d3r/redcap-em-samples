<?php

namespace ExampleModules\PSR4\Traits;

use ExampleModules\PSR4\Classes\TestClass1;

trait TestTrait2 {
    protected static function test2() {
        TestClass1::displayDebug("Executing test for: " . __TRAIT__);
    }
}