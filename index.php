<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- This is a little hack to stop render blocking but shouldn't be used for essential CSS -->
    <!-- Another trick is to use 'above the fold' styles (inline css in the head) which loads in the styles only necessary
    for when the user first lands and hasn't scrolled yet. E.g. you might have your navigation and hero section above the fold  -->
    <!-- <link rel="preload" href="/path/to/my.css" as="style">
    <link rel="stylesheet" href="/path/to/my.css" media="print" onload="this.media='all'"> -->

    <link rel="stylesheet" href="mobile-styles.css">
    <link rel="stylesheet" href="tablet-styles.css" media="screen and (min-width: <?php echo $_SITE_OPTIONS['breakpoints']['m']; ?>">
    <link rel="stylesheet" href="tablet-styles.css" media="screen and (min-width: <?php echo $_SITE_OPTIONS['breakpoints']['xl']; ?>">
    <title>Styles-ish Demonstration</title>
</head>
<body>
    <!-- nav should be top level in case of stickyness. Sticky elements only stick to their parent -->
    <nav>
        <!-- <picture></picture> -->
    </nav>
    <!-- Load header styles here (drip feed CSS, prevent render blocking) -->
    <header>
        <h1>H1 (First Child)</h1>
        <p>Paragraph with normal block margin</p>
        <p>Paragraph (Last Child)</p>
    </header>

    <button class="my-btn"></button>
    <!-- Load main styles here (preventing render blocking for above content) -->
</body>
</html>