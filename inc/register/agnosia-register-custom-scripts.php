<?php

/**
 * NOTICE: This file is part of the Agnosia Starter Kit child theme for the Agnosia framework.
 * You can edit this file without altering the original Agnosia core.
 *
 * This file should only handle registration of custom javascript files.
 * Please try not to call any function directly into this file. The recommended method is calling the functions through action and filter hooks.
 * For an example about how this file should work, see wp-content/themes/agnosia/inc/register/agnosia-register-scripts.php
 * 
 * For further information, visit @link http://codex.wordpress.org/Function_Reference/add_action and @link http://codex.wordpress.org/Function_Reference/add_filter.
 * 
 * @package Agnosia_Starter_Kit
 */



/**
 * Load a conditional file for extra scripts to prevent overwriting 
 * of child theme's functionality on updates. 
 */

function agnosia_starter_kit_enqueue_scripts() {

	$file = agnosia_get_uri( '/js/agnosia-extra-scripts.js' );

	if ( $file ) :         
		wp_enqueue_script( 'agnosia.extra.scripts' , $file , array() , '1.0' );     
	endif;

}



/* Add action hooks. */
add_action( 'wp_enqueue_scripts', 'agnosia_starter_kit_enqueue_scripts' );

?>