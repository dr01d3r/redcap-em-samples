# Example Module - Standalone Plugin

### Summary

Connect to REDCap and query the database

This code should be placed in a folder in [redcap_root_directory]/plugins/[plugin_folder_name]

This snippet makes the plugin page public and available without logging in

`define('NOAUTH',true)`

Connect to REDCap DB and auto-include all REDCap functions/classes

```
// Navigate to root REDCap folder
$rootDir = dirname(dirname(__DIR__));

// Include redcap_connect.php
include_once($rootDir."redcap_connect.php");
```

