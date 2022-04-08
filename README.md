# Styles-ish 

## What is Styles-ish?
Styles-ish is an opinionated set of SCSS utilities, classes, mixins intended to make lives easier for front-end designers.
Using SCSS makes it easier to write styles so Styles-ish provides a SCSS library rather than a CSS library. 
This allows style-ish to provide more functionality than pure CSS could easily do, it also makes it easier to extend in your own codebase.

Styles-ish provides utilities for common design patterns, layouts and frequently (ab)used functionality!
Styles-ish isn't quite Bootstrap, and it isn't quite Tailwind (both of which are great libraries).
Instead Styles-ish wants to be useful a starting point for a tailor made library which applies specifically to the projects that you write.
Customize it, extend it, include the bits you need and throw away those you don't!

Styles-ish doesn't require a vast amount of CSS classes that probably sit unused on your client's browser; eating up their bandwidth!
Instead, Styles-ish is intended to be compiled, minimized, extended, used as needed and genuinely useful.
Runtime performance is important to us, so Styles-ish is split into many files and divided into folders by category so you can use just what you need.
Although Styles-ish does provide many utility classes, they're secondary to the internals of the library.
Utility classes are provided separately (in different files) so that you can use them if you want or for a really lightweight experience; build your own as needed!

## Some Useful Points
- Styles-ish may be nicely integrated with normalize.css for a consistent crossbrowser experience.
This is particularly useful when building a website that you may want to be viewed by a wide variety of people.
- Styles-ish is designed to be **mobile first**. 
We believe that the web should be accessible to all, it is for this reason that we encourage splitting your styles into specific device types.
We advise keeping a global list of breakpoints in your styles and mirrored on your backend architecture. For example you may choose to include your compiled CSS files like this:

```html
    <!-- Example with PHP -->

    <!-- use a default style for mobiles -->
    <link rel="stylesheet" href="mobile-styles.css">

    <!-- Use a min and a max to ensure that only styles that are needed get loaded for this device -->
    <link rel="stylesheet" href="tablet-styles.css" 
        media="screen and (min-width: <?php echo $_SITE_OPTIONS['breakpoints']['m']; ?>em) and (max-width: <?php echo $_SITE_OPTIONS['breakpoints']['m']; ?>em)">

    <!-- Written using the Level 4 Media Queries spec improvements -->
    <link rel="stylesheet" href="tablet-styles.css" 
        media="screen and (<?php echo $_SITE_OPTIONS['breakpoints']['m']; ?>em) <= width <= <?php echo $_SITE_OPTIONS['breakpoints']['m']; ?>em)">

    <!-- Will only load on larger screens (as defined by your breakpoints) -->
    <link rel="stylesheet" href="tablet-styles.css" media="screen and (min-width: <?php echo $_SITE_OPTIONS['breakpoints']['xl']; ?>px">

    <!-- Don't forget you can also query things like (min-resolution: 300dpi) for high res screens. Or query certain CSS or device capabilites e.g. hover -->
    <!-- Orientation, prefers-*, speech and many more media queries are great ways of making your website more accessible, individual and professional! -->

```

## Thank you for reading 😁

---

### please enjoy Style-ish responsibly
*(Don't import all just to use .container)*