# Example Module - Standalone Plugin

### Summary

Connect to REDCap and query the database

This code should be placed in a folder in [redcap_root_directory]/plugins/[plugin_folder_name]

Server configuration information should be stored in a separate file so that plugin can be easily migrated

```
// Include config with server specific constants
// Use __DIR__ in case this file is included from another folder
include_once(__DIR__."/config.php");
```

This snippet makes the plugin page public and available without logging in

`define('NOAUTH',true)`

This snippet connects to REDCap DB and auto-includes all REDCap functions/classes

```
// Navigate to root REDCap folder
$rootDir = dirname(dirname(__DIR__));

// Include redcap_connect.php
include_once($rootDir."/redcap_connect.php");
```

