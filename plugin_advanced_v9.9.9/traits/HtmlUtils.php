<?php

namespace ExampleModules\AdvancedPlugin\Traits;

trait HtmlUtils {
    private static $smarty;

    public function displayAlert($msg, $type = "info") {
        $this->setTemplateVariable("alert_type", $type);
        $this->setTemplateVariable("alert_message", $msg);
        $this->displayTemplate("alert.tpl");
    }

    public function displayDebug($debug) {
        if (is_array($debug) || is_object($debug)) {
            echo "<pre>" . print_r($debug, true) . "</pre>";
        } else {
            echo "<pre>$debug</pre>";
        }
    }

    private function initializeSmarty() {
        self::$smarty = new \Smarty();
        self::$smarty->setTemplateDir(MODULE_DOCROOT . 'templates');
        self::$smarty->setCompileDir(MODULE_DOCROOT . 'templates_c');
        self::$smarty->setConfigDir(MODULE_DOCROOT . 'configs');
        self::$smarty->setCacheDir(MODULE_DOCROOT . 'cache');
    }

    public function setTemplateVariable($key, $value) {
        self::$smarty->assign($key, $value);
    }

    public function displayTemplate($template) {
        self::$smarty->display($template);
    }
}