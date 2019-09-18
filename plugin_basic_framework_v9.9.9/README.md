# Example Module - Basic Framework Plugin

### Summary

Goes beyond the basics, creating an infrastructure for providing complex solution 

### Highlighted Features

- Obtaining intellisence/code-hinting for the `framework` property
- 

##### Module Configuration

- N/A

### Walkthrough

`TODO`



### Considerations

- [Magic Methods](https://www.php.net/manual/en/language.oop5.magic.php) limit the intellisence available to us against the `framework` property
  - The framework relies on this feature, to ease the transition into the framework versions, while also having the ability to change method implementations as needed.
  - In the case of the example in this module, `getProjectSettings` gets executed through the `__call` magic method.
  - In many other cases, we must rely on documentation to know what's available to us and how to call it. 