<?php
/** @var \ExampleModules\BasicPlugin\BasicPlugin $module */
require_once APP_PATH_DOCROOT . 'ProjectGeneral/header.php';
/* BEGIN HERE */

echo "<h2>Hello, External Modules!</h2>";

$module->displayAlert("You can output module html in many ways");

$username = USERID;
$module->displayAlert("Logged in as <b>$username</b>!");

$projectInfo = $module->getProjectDetails($module->getProjectId());
$module->displayDebug(array_filter($projectInfo));

/* END HERE */
require_once APP_PATH_DOCROOT . 'ProjectGeneral/footer.php';