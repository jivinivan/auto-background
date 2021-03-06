# jQuery Auto Background

This is a jQuery plugin that sets the background of an element based on the pixel color on the edges of an image. This can be especially useful for setting the background of a full width rotating slideshow based on the containing image. 

[View the Project Page](https://github.com/jivinivan/auto-background)

## Usage
```javascript
// Basic
$("#image").autoBackground();

// With some options
$("#image").autoBackground({
  location: 'top-left', // Location of pixel to reference. Options are top-left, bottom-left, top-right and bottom-right | Default: top-left
  target: 'body' // Elements to set background color | Default: body
});
```
## Requirements
* jQuery 1.7+
* CORS must be enabled to access image data.

## Browser Support
Any browser supporting html5 canvas. 

## Contact
If you have any questions please find me on Twitter at [@jivinivan](https://twitter.com/jivinivan).

## Changelog

0.1.1 (10/7/13): Add example with CORS support.
0.1.0 (10/3/13): Initial release.

## License
Licensed under the MIT and GPL licenses.