<?php

/**
 * NOTICE: This file is part of the Agnosia Starter Kit child theme for the Agnosia framework.
 * You can edit this file without altering the original Agnosia core.
 *
 * This file handles extra theme support for the current child theme.
 * You can add or remove theme support features here.
 * For further information, visit @link http://codex.wordpress.org/Function_Reference/add_theme_support.
 * 
 * @package Agnosia_Starter_Kit
 */


/**
 * Declare a global variable which stores an array of WordPress features to be unsupported.
 * Uncomment the lines for the features you need to unsupport.
 */

function agnosia_starter_kit_finalize_wordpress_theme_support() {

	global $agnosia_starter_kit_wordpress_not_supported;

	$agnosia_starter_kit_wordpress_not_supported = array(

		//'automatic-feed-links', // Adds RSS links to <head> section
		//'post-thumbnails', // Adds support for featured images

	);

}



/**
 * Remove theme support for previously defined WordPress features.
 */

function agnosia_starter_kit_remove_wordpress_theme_support() {

	global $agnosia_starter_kit_wordpress_not_supported;

	agnosia_remove_theme_support( $agnosia_starter_kit_wordpress_not_supported );

}



/**
 * Declare a global variable which stores an array of custom theme features to be unsupported.
 * Uncomment the lines for the features you need to unsupport.
 */

function agnosia_starter_kit_finalize_custom_theme_support() {

	global $agnosia_starter_kit_custom_not_supported;

	$agnosia_starter_kit_custom_not_supported = array(

		//'agnosia-branding',
		//'agnosia-header-navbar', 
		//'agnosia-right-sidebar',

	);

}



/**
 * Remove theme support for previously defined WordPress features.
 */

function agnosia_starter_kit_remove_custom_theme_support() {

	global $agnosia_starter_kit_custom_not_supported;

	agnosia_remove_theme_support( $agnosia_starter_kit_custom_not_supported );

}



/**
 * Initialize extra theme support for WordPress features.
 * Comment the lines for the features you don't need.
 */

function agnosia_starter_kit_initialize_wordpress_theme_support() {

	global $agnosia_starter_kit_wordpress_theme_support;

	$agnosia_starter_kit_wordpress_theme_support = array(

		'custom-background' => false,
		'custom-header' => array( 'default-text-color' => '000000' ),

	);

}



/**
 * Add extra theme support for previously defined WordPress features.
 */

function agnosia_starter_kit_add_wordpress_theme_support() {

	global $agnosia_starter_kit_wordpress_theme_support;

	agnosia_add_theme_support( $agnosia_starter_kit_wordpress_theme_support );

}



/**
 * Initialize extra theme support for Agnosia features.
 * Comment the lines for the features you don't need. 
 */

function agnosia_starter_kit_initialize_custom_theme_support() {

	global $agnosia_starter_kit_custom_theme_support;

	$agnosia_starter_kit_custom_theme_support = array(

		'agnosia-post-formats' => false , /* Allows to manage and support post formats through the Agnosia Options admin page. */
		'agnosia-post-formats-custom-post-types' => false , /* Allows to manage and support post formats for custom post types through the Agnosia Options page. */
		'agnosia-post-formats-pages' => false , /* Allows to manage and support post formats for pages through the Agnosia Options page. */
		'agnosia-widget-shortcodes' => false , /* Adds shortcode parsing in widgets. */
		'agnosia-excerpt-shortcodes' => false , /* Adds shortcode parsing in excerpts. */
		'agnosia-term-shortcodes' => false , /* Adds shortcode parsing in taxonomies descriptions. */
		'agnosia-top-navbar' => false , /* Allows to manage an additional navigation bar, by default in the top of the site. */
		'agnosia-secondary-branding' => false , /* Adds options to manage a secondary brand into branding template. */
		'agnosia-additional-site-description' => false , /* Allows to show the site description in a separate template, by default after the site header. */
		'agnosia-left-sidebar' => false , /* Adds options to manage an additional navigation bar, by default to the left of the content. */
		'agnosia-footer-columns-selection' => false , /* Allows to select the number of columns that will be shown in the site footer. */
		'agnosia-page-excerpts' => false , /* Adds the post excerpt metabox into pages. */
		//'agnosia-dynamic-wrapper' => false, /* Adds the option to select the type of wrapping of your page. Not recommended unless you want to write A LOT of CSS for your theme. */

	);

}



/**
 * Add extra theme support for previously defined Agnosia features.
 */

function agnosia_starter_kit_add_custom_theme_support() {

	global $agnosia_starter_kit_custom_theme_support;

	agnosia_add_theme_support( $agnosia_starter_kit_custom_theme_support );

}



/**
 * Add action filters. 
 */

add_action( 'agnosia_before_setup', 'agnosia_starter_kit_finalize_wordpress_theme_support' );
add_action( 'agnosia_before_setup', 'agnosia_starter_kit_remove_wordpress_theme_support' );
add_action( 'agnosia_before_setup', 'agnosia_starter_kit_finalize_custom_theme_support' );
add_action( 'agnosia_before_setup', 'agnosia_starter_kit_remove_custom_theme_support' );
add_action( 'agnosia_before_setup', 'agnosia_starter_kit_initialize_wordpress_theme_support' );
add_action( 'agnosia_before_setup', 'agnosia_starter_kit_initialize_custom_theme_support' );
add_action( 'agnosia_before_setup', 'agnosia_starter_kit_add_wordpress_theme_support' );
add_action( 'agnosia_before_setup', 'agnosia_starter_kit_add_custom_theme_support' );


?>