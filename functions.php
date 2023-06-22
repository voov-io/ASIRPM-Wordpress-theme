<?php
/*


@package asirpm
@subpackage asirpm
@since 1.0
*/
/** Funtion to get get root URL  */
define('themepath', get_stylesheet_directory_uri() );


define('ImagesPath',themepath.'/images');

define('IconsPath',themepath.'/icons');


//Loading styles and scripts


require_once('includes/scripts-styles.php');

//Registering interactive Sidebars 

require_once('includes/sidebar.php');

//Registering main menu 
require_once('includes/menus.php');

//Giving support to post-thumbnails
add_theme_support('post-thumbnails');

//Defining custon fuction


require_once('custom-shortcodes.php');