<?php
// Include base.php for all plugin constants and to connect to REDCap
include_once(__DIR__."/base.php");

// Advanced query language for redcap_data table
$sql = "SELECT d.*
		FROM redcap_data d, redcap_data d2, redcap_data d3
		WHERE d.project_id = ".PROJECT_ID."
			AND d.project_id = d2.project_id
			AND d.project_id = d3.project_id
			AND d.record = d2.record
			AND d.record = d3.record
			AND d.field_name = '".RECORD_ID_FIELD."'
			AND d2.field_name = '".GENDER_FIELD."'
			AND d3.field_name = '".COUNTRY_FIELD."'";

// Query the database and check for errors
if(!($q = db_query($sql)) || db_error()) {
	var_dump(db_error());
}