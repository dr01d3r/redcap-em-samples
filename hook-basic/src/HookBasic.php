<?php
namespace ExampleModules\HookBasic;

use ExternalModules\AbstractExternalModule;
use ExternalModules\ExternalModules;

class HookBasic extends AbstractExternalModule {

    public function redcap_every_page_top($project_id)
    {
        $this->displayAlert(__FUNCTION__);
        if ($this->getProjectSetting("enable_debugging", $project_id) === true) {
            $this->displayDebug(get_defined_vars());
        }
    }

    public function redcap_survey_page_top($project_id, $record, $instrument, $event_id, $group_id, $survey_hash, $response_id, $repeat_instance)
    {
        $this->displayAlert(__FUNCTION__);
        if ($this->getProjectSetting("enable_debugging", $project_id) === true) {
            $this->displayDebug(get_defined_vars());
        }
    }

    public function redcap_data_entry_form_top($project_id, $record, $instrument, $event_id, $group_id, $repeat_instance)
    {
        $this->displayAlert(__FUNCTION__);
        if ($this->getProjectSetting("enable_debugging", $project_id) === true) {
            $this->displayDebug(get_defined_vars());
        }
    }

    public function redcap_survey_page($project_id, $record, $instrument, $event_id, $group_id, $survey_hash, $response_id, $repeat_instance)
    {
        $this->displayAlert(__FUNCTION__);
        if ($this->getProjectSetting("enable_debugging", $project_id) === true) {
            $this->displayDebug(get_defined_vars());
        }
    }

    public function redcap_data_entry_form($project_id, $record, $instrument, $event_id, $group_id, $repeat_instance)
    {
        $this->displayAlert(__FUNCTION__);
        if ($this->getProjectSetting("enable_debugging", $project_id) === true) {
            $this->displayDebug(get_defined_vars());
        }
    }

    function displayAlert($msg, $type = "info") {
        echo "<div class='alert alert-$type'>$msg</div>";
    }

    function displayDebug($debug) {

        if (is_array($debug) || is_object($debug)) {
            echo "<pre>" . print_r($debug, true) . "</pre>";
        } else {
            echo "<pre>$debug</pre>";
        }
    }
}