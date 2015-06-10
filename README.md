#Bare Development Theme

A starting point for WordPress development projects.

Setting up the Bare WP Theme in CodeKit - https://www.youtube.com/watch?v=Rjcw-pJLB3E

##CodeKit
I use CodeKit to handle all of my tasks as I work. It compiles my Sass, concatonates and minifies my javascript, and a whole bunch of other stuff. I have included my codekit.config in this repo so it can be as easy as dragging the project folder into CodeKit and then you are up and running. If you don't have CodeKit you can purchase it here https://incident57.com/codekit/

##Sass
This starter bundle uses Sass as a CSS preprocessor. I like my Sass handled a specific way and that is setup in the codekit.config file, but obviously you can set it up however you want.

##Retina Images
retina.js is prepended to scripts.js and will handle all of your inline retina image needs. You can learn more about it and how it works at http://retinajs.com/. There is also a mixin called retina-sprite that you can use to handle all of your retina images in CSS. Take a look at the mixin as you may have to change the path to the file as well as the background size to get it working.

##Options Framework
For theme options I use the options framework plugin so you will find references to that in functions.php as well as find options.php. This is a very useful/full featured framework. You can learn more about it here https://github.com/devinsays/options-framework-plugin.

##Versions
jQuery v1.11.3 (loaded via Google's CDN)
retina.js v1.3.0
Options Framework v1.8.4

####Just looking for good ol' HTML?
You can find just the HTML counterpart at https://github.com/rjmccollam/Bare-HTML. Since most of the work I do is WordPress related the HTML version is not always up to date with changes that I have made here.