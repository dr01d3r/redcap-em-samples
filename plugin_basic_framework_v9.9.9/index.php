<?php
/** @var \ExampleModules\BasicFrameworkPlugin\BasicFrameworkPlugin $module */
require_once APP_PATH_DOCROOT . 'ProjectGeneral/header.php';
/* BEGIN HERE */

echo "<h2>Hello, External Modules!</h2>";

$module->displayDebug($module->framework->getProjectSettings());

/* END HERE */
require_once APP_PATH_DOCROOT . 'ProjectGeneral/footer.php';