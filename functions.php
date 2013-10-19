<?php

/**
 * NOTICE: This file is part of the Agnosia Starter Kit child theme for the Agnosia Theme Framework.
 * You can edit this file without altering the original Agnosia core.
 *
 * This file should only handle exclusive visualization functions for your child theme.
 * Please try not to call any function directly into this file. The recommended method is calling the functions through action and filter hooks.
 * 
 * For further information, visit @link http://codex.wordpress.org/Function_Reference/add_action and @link http://codex.wordpress.org/Function_Reference/add_filter.
 * 
 * @package Agnosia_Starter_Kit
 * 
 * @author andrezrv
 */


/**
 * Load a conditional file for extra functions to prevent overwriting 
 * of child theme's functionality on updates. 
 */
function agnosia_starter_kit_load_extra_functions() {

	require_once get_template_directory() . '/inc/utils/agnosia-file-getter.php';

	$file = agnosia_get_path( '/inc/utils/agnosia-extra-functions.php' );

	if ( $file ) {
		include_once $file;
	}

}


// Add action filters.
add_action( 'agnosia_after_init', 'agnosia_starter_kit_load_extra_functions' );


/* Add child theme exclusive functions after this line. */