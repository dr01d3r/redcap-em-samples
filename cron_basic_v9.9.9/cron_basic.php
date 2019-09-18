<?php
namespace cron_basic;

class cron_basic extends \ExternalModules\AbstractExternalModule {
	public function __construct() {
		parent::__construct();
		// Other code to run when object is instantiated
	}

	public function log_cron() {
		error_log("This cron ran at ".date('Y-m-d h:i:s'));
	}
	
}