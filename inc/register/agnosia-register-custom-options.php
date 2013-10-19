<?php

/**
 * NOTICE: This file is part of the Agnosia Starter Kit child theme for the Agnosia Theme Framework.
 * You can edit this file without altering the original Agnosia core.
 *
 * This file should only handle custom options for your child theme.
 * Please try not to call any function directly into this file. The recommended method is calling the functions through action and filter hooks.
 * For an example about how this file should work, see wp-content/themes/agnosia/inc/register/agnosia-register-options.php
 * 
 * For further information, visit @link http://codex.wordpress.org/Function_Reference/add_action and @link http://codex.wordpress.org/Function_Reference/add_filter.
 * 
 * @package Agnosia_Starter_Kit
 * 
 * @author andrezrv
 */

/**
 * The following lines are commented by default in order to prevent the execution of unnecessary processes,
 * but provide a practical example of how this file should be used. You can uncomment them to see how it works.
 */

/**
 * Set new default values for the options you want.
 */
/*function agnosia_starter_kit_reset_options_defaults() {

	agnosia_reset_option_default( 'stylesheet', 'starter-kit-styles' );

}
*/

// Add action filters.
// add_action( 'agnosia_before_setup', 'agnosia_starter_kit_reset_options_defaults' );