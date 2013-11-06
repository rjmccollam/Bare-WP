##Change Log

###Current Verison

####Version 1.1 - 11/5/2013
- Updated `DOCTYPE` to HTML5 (finally)
- Added `meta` viewport tag
- Removed the `/` from self closing tags in the header
- Fixed weird " ` " in Sitemap page template so it doesn't error out anymore
- Updated jQuery version to 1.10.2 (Google hosted)
- Added support for custom menus by default
- Some other very minor changes that are more for my OCD than actual useful changes

####Version 1.0
- It's offical Bare is ready to roll just how we want it
- Now includes spiffy BARE screenshot.png

####Version 0.9.0
**functions.php**
- Removed default permalinks
- Added Theme Options

####Version 0.8.1
**functions.php**
- Fixed bad single quotes that cuased WordPress and theme to freak out when activated

####Version 0.8
**header.php**
- Changed DOCTYPE to XHTML 1.0 Transitional
- Removed favicon link in `<head>`
- Removed default markup below `<body>` and replaced with comment to add code here

**functions.php**
- Added better handling of `the_excerpt` that automatically includes a Read More >> link with a class of .read-more
- Added default permalinks setting to `/%postname%/`
- Added Featured Image support

**single.php**
- Removed containing post divs
- Changed `<h2>` to `<h1>`
- Removed next/prev post and tags

**page.php**
- Removed containing post divs
- Changed `<h2>` to `<h1>`
- Removed next/prev post and tags
- Removed comments template
- Removed meta info include

**sidebar.php**
- Removed check to see if there were any widgets are not, and if not display some default widgets. Now it will only show widgets set in the WP Admin area.

**footer.php**
- Removed all div tags
- Added script section with defualt load of jQuery (current version of 1.9.0 hosted by Google)

**archive.php**
- Changed `<h2>` to `<h1>`
- Changed `the_content` for each post to `the_excerpt`
- Removed auto generated classes for divs and headings

**search.php**
- Changed `<h2>` to `<h1>`
- Removed auto generated classes for divs and headings
- Changed heading for each post to be a link to post

**searchform.php**
- Removed containing div tag (it had no purpose)
- Removed input label for search field and replace with value of "Search..."

**404.php**
- Changed `<h2>` to `<h1>`

**style.css**
- Added default styling for .post
- Added blank space for .read-more
- Updated verion number and added tags to theme info
- Added default styline for linked images

New Files
- Added sitemap.php as a custom page template that lists posts by author, pages, and all posts

Misc
- Added README file with better documentation

###Previous Versions

I had no documentation on this so as far as we are all concerned this started with version 0.8 :)