=== Contovista Theme ===

Contributors: blueglassinteractive
Requires at least: WordPress 4.7
Tested up to: WordPress 6
Stable tag: 1.0.0
Version: 1.0.0
Requires PHP: 7.3
License: GNU General Public License v3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html


== Description ==
There is no limitations on using this theme as long as you stick to the basic structure described below, thank you.


Files in the folder "include" are autoincluded, so creating new file there will reqire no additional effor to include it.

= Structure =
Page template files goes to "page-template" folder

Smaller bits of the templates or files that included somewhere goes to "template-parts" folder. 
Flexible content sections should be placed separatly in properly named file under "template-parts/flexible" folder


= SCSS =
Requires plugin "WP-SCSS" or similar!

This theme uses SCSS and preprocessing of css files. Write your custom css to /assest/scss/

For media breakpoints use this in you scss code:
.class_name{
    /* mobile css */
    color: $red;

    @include media-breakpoint-up( md ) {
        /* medium breakpoint css */
        color: $red;
    }

    @include media-breakpoint-up( lg ) {
        /* large breakpoint css */
        color: #00ffff;
    }
}

Breakpoints can be added and configured in variable $grid-breakpoints at "/assets/scss/_variables-and-functions.scss"

Global colors, gutter and grid columns can be configured in "/assets/scss/_variables-and-functions.scss"


= New css file =
When adding new scss file, it will auto comple to "assets/css" folder, and you will need to enqueue this new file from functions.php
Please enqueue new files only on pages that really needs them.


= Image crop sizes =
Add template crop sizes to function.php file function "blueglass_theme_setup"


= Nav menus & sidebars =
Can be added or changed from function.php file function "blueglass_theme_setup"

= PHP functions and files included =
* Functions that are used to convert something or do some manipulation, etc, please add to "includes/helper.php"
* Functions that is related to UI of the website, please add to "includes/ui.php"
* Wordpress or some plugins hook and filters manipulations, please add to "includes/hooks.php"
* WP AJAX callbacks, please add to "includes/ajax.php"
* Adding new post types, taxonomies etc, please add to "includes/post_types.php"
* To add some url rewrites, please add to "includes/rewrite_rules.php"
* File "includes/optimisation.php" can be used to add conditions and dequoue styles and script where needed.

Some functions might be commented out by default, uncomment and edit if needed.