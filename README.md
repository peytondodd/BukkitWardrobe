BukkitWardrobe
==============

A PHP script to provide a "clothes generator" for your Minecraft server. You can find a working demo here:

[![Screeenshot](http://up.frd.mn/8h52w.png)](http://skin.yeahwh.at)

## Requirements

* Web server (Nginx/Apache)
* PHP 5.5 support
* ImageMagick

## Installation

1. Clone this repository to your document root
1. Make sure the web server is allowed to create/adjust files
1. Point your browser to that document root

## Development

In case you want to help and contribute to the project you need to compile the assets with the assistence of Grunt:

1. Make sure you've installed `node` and `npm`
1. Install Grunt, Bower and Linter and code checker:  
  `npm install -g grunt-cli bower jshint jscs`
1. Install all dependencies:  
  `npm install`
1. Install web libraries:  
  `bower install`
1. Run grunt task to compile assets and start watching for local file changes:  
  `grunt dev`

If you want to commit your changes, exclude the `dev` argument.

Caution: When using the `dev` argument, Grunt won't minify your JS or CSS, so it's easier to debug. Once you run `grunt` (without the `dev`), the files are minified!

## Version

1.2.1
