# Templates and Guides for building External Modules within REDCap

### Table of Contents

##### Hooks

- Basic Hook ([link](modules/hook_basic_v9.9.9))
  - Displays HTML on standard REDCap pages
  - Simple module configuration
- Save Data Hook ([link](modules/hook_save_data_v9.9.9))
  - Takes action when record data is saved (data entry forms & surveys)

##### Plugins

- Basic Plugin ([link](modules/plugin_basic_v9.9.9))
  - Demonstrates some basic methods of pulling data from REDCap and displaying it on a plugin page
  - No module configuration
- Basic Framework Plugin ([link](modules/plugin_basic_framework_v9.9.9))
  - Same idea as the previous plugin, but using the `framework` property
    - The "Framework" is a fairly new concept that was added to External Modules ~v9.0.0.  See the official documentation [here](https://github.com/vanderbilt/redcap-external-modules/blob/release/docs/framework/intro.md) for more info. 
- Advanced Plugin ([link](modules/plugin_advanced_v9.9.9))
  - Goes beyond the basics, creating an infrastructure for providing complex solutions
    - Traits & Utility classes
    - CSS & JavaScript files
    - Bringing in external libraries through Composer
- Autoloader Plugin ([link](modules/plugin_psr4_v9.9.9))
  - Focuses on a singular feature of Composer, psr-4, that makes class management easier in your module

### Sept 2019 Curriculum

* Developer tools: Tools we use as a REDCap EM developers
* Common Gotchas
* EMs vs plugins vs hooks
* External Module Framework
* EMs from scratch
    * manually coding json
    * starting with the templater
* [Repository of External Modules](https://redcap.vanderbilt.edu/consortium/modules/index.php): https://redcap.vanderbilt.edu/consortium/modules/index.php
* Notes from meeting: https://docs.google.com/document/d/1UbeN-_le8JLsy8yYVtjaiu2gTMYrcLxAzsIw5Sb-IPM/edit
