<?php
/*
@package asirpm
@subpackage asirpm
@since 1.0
*/

//Registering styles ans scrips


function asirpm_theme_styles(){

  wp_register_style('styles',themepath.'/style.css','all');

  wp_register_style('style', get_stylesheet_uri(),array('styles'),'1.0','all');

  //CSS files

  wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts','asirpm_theme_styles');



//Registering and loading scripts


function asirpm_theme_scripts(){

  //Loading scripts
  wp_register_script('mobile-menu',themepath.'/js/mobile-menu.js',array('jquery'),'1.5.1',true);
  wp_enqueue_script('mobile-menu');

  wp_register_script('index',themepath.'/js/index.js',array('jquery'),'1.5.1',true);
  wp_enqueue_script('index');
  }

  add_action('wp_enqueue_scripts','asirpm_theme_scripts');
