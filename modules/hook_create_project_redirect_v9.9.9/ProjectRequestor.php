<?php
namespace ExampleModules\ProjectRequestor;

class ProjectRequestor extends \ExternalModules\AbstractExternalModule {
	public function __construct() {
		parent::__construct();
		// Other code to run when object is instantiated
	}

	public function redcap_every_page_before_render(  ) {
		if($_SERVER['REQUEST_URI'] == "/index.php?action=create") {
			//error_log("Module: Request ".PAGE." ~ ".$_SERVER['REQUEST_URI']);

			## Are you a superuser?
			if(constant("SUPER_USER") == 1) {
				## TODO Need to add functionality to import the records

				return;
			}

			## Get the stored project link and alert if not set
			$projectLink = $this->getSystemSetting("project-link");
			if(empty($projectLink)) {
				echo "<script type='text/javascript'>alert('Your Admin enabled a module without configuring it');</script>";
				$this->exitAfterHook();
				return;
			}

			## Redirect non-superusers
			header("Location: ".$projectLink);
		}
	}
}