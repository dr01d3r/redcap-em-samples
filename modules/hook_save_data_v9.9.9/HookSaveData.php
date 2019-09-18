<?php
namespace ExampleModules\HookSaveData;

use ExternalModules\AbstractExternalModule;
use ExternalModules\ExternalModules;

class HookSaveData extends AbstractExternalModule {

    function redcap_save_record($project_id, $record, $instrument, $event_id, $group_id, $survey_hash, $response_id, $repeat_instance)
    {
        if ($this->getProjectSetting("enable_debugging", $project_id) === true) {
            \REDCap::logEvent("HookSaveData => redcap_save_record", "Just logging the event", null, $record, $event_id, $project_id);
        }
    }
}