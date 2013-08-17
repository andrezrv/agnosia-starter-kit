<?php

/**
 * NOTICE: This file is part of the Agnosia Starter Kit child theme for the Agnosia framework.
 * You can edit this file without altering the original Agnosia core.
 *
 * This file should only handle Agnosia theme styles registration for your child theme.
 * Please try not to call any function directly into this file. The recommended method is calling the functions through action and filter hooks.
 * For an example about how this file should work, see wp-content/themes/agnosia/inc/evaluation/agnosia-evaluations.php
 * 
 * For further information, visit @link http://codex.wordpress.org/Function_Reference/add_action and @link http://codex.wordpress.org/Function_Reference/add_filter.
 * 
 * @package Agnosia_Starter_Kit
 */

?>

<?php

/**
 * The following lines are commented by default in order to prevent the execution of unnecessary processes,
 * but provide a practical example of how this file should be used. You can uncomment them to see how it works.
 */

/**
 * If you want to use your custom Bootstrap compilation, then:
 * 1) name your compilation folder like the slug of your custom style (i.e. 'starter-kit-styles');
 * 2) copy your compilation folder into the Bootstrap folder of your child theme (i.e. bootstrap/starter-kit-styles);
 * 3) set the parameter $custom_boostrap of agnosia_register_style() to true.
 * To customize Boostrap, we suggest to use @link http://fancyboot.designspebam.com/.
 */

/*function agnosia_starter_kit_load_styles() {
	
	//agnosia_register_style( 'starter-kit-styles' , __( 'Agnosia Starter' , 'agnosia_starter_kit' ) , $custom_bootstrap = false ); // This sets a new selectable style for your child theme.
	//agnosia_unregister_style( 'agnosia-basic' ); // This unregisters the Agnosia Basic style.
	//agnosia_unregister_style( 'agnosia-blank' ); // This unregisters the Agnosia Blank style.

}*/



/* Add action hooks. */
/*add_action( 'agnosia_before_setup', 'agnosia_starter_kit_load_styles' );*/

?>