<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */


 /**
  * Composer Autolad
  *
  */
require_once( __DIR__ . '/vendor/autoload.php' );

 

/**
 * Internationalization text domain
 * 
 */
define( 'THEME_TEXT_DOMAIN', 'wpe-basic-boilerplate-theme' );

add_action( 'after_setup_theme', 'theme_text_domain_setup' );
function theme_text_domain_setup(){
    load_theme_textdomain( THEME_TEXT_DOMAIN, get_template_directory() . '/languages' );
}



/**
 * 1. Load Timber
 * 2. Get Timber context or instance basic array
 * 
 */
$timber = new Timber\Timber();
add_action('template_redirect', 'init_context');
function init_context() {
	global $context;
	$context = Timber\Timber::get_context();
}