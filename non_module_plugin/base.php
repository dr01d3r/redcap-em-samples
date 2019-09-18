<?php
/**
 * Created by PhpStorm.
 * User: mcguffk
 * Date: 9/18/2019
 * Time: 12:01 PM
 */

// Ensure that errors will be displayed / comment out for production
ini_set('display_errors',1);
error_reporting(E_ALL);

// Project Data Dictionary constants
define("RECORD_ID_FIELD","record_id");
define("GENDER_FIELD","gender");
define("COUNTRY_FIELD","country");

// Include config with server specific constants
// Use __DIR__ in case this file is included from another folder
include_once(__DIR__."/config.php");

$_GET['pid'] = PROJECT_ID;

// Verify plugin is configured and display error message if not
if(!is_numeric(constant("PROJECT_ID"))) {
	throw new Exception("PROJECT_ID not defined in config.php");
}

// Navigate to root REDCap folder
$rootDir = dirname(dirname(__DIR__));

// Include redcap_connect.php
require_once($rootDir."/redcap_connect.php");