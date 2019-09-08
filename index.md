# Templates and Guides for building External Modules within REDCap

### Table of Contents

##### Hooks

- Basic Hook ([link](hook_basic_v9.9.9/README.md))
  - Displays HTML on standard REDCap pages
  - Simple module configuration
- Save Data Hook ([link](hook_save_data_v9.9.9/README.md))
  - Takes action when record data is saved (data entry forms & surveys)

##### Plugins

- Basic Plugin ([link](plugin_basic_v9.9.9/README.md))
  - Demonstrates some basic methods of pulling data from REDCap and displaying it on a plugin page
  - No module configuration
- Basic Framework Plugin ([link](plugin_basic_framework_v9.9.9/README.md))
  - Same idea as the previous plugin, but using the `framework` property
    - The "Framework" is a fairly new concept that was added to External Modules ~v9.0.0.  See the official documentation [here](https://github.com/vanderbilt/redcap-external-modules/blob/release/docs/framework/intro.md) for more info. 
- Advanced Plugin ([link](plugin_advanced_v9.9.9/README.md))
  - Goes beyond the basics, creating an infrastructure for providing complex solutions
    - Traits & Utility classes
    - CSS & JavaScript files
    - Bringing in external libraries through Composer
- Autoloader Plugin ([link](plugin_psr4_v9.9.9/README.md))
  - Focuses on a singular feature of Composer, psr-4, that makes class management easier in your module