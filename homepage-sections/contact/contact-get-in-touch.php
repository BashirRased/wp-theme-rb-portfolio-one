<?php 
/**
 * The template for displaying frontpage contact me section
 *
 * Part of contact me section get in touch
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.1
 */
 
global $bashir_rased_data;

if($bashir_rased_data):

$bashir_rased_get_in_touch_title = $bashir_rased_data['bashir-rased-get-in-touch-title'];

if(isset($bashir_rased_get_in_touch_title) && !empty($bashir_rased_get_in_touch_title)){
	printf(
		/* translators: %s: contact me section get in touch title */
		'%s',
		esc_html($bashir_rased_get_in_touch_title,'bashir-rased')
	);
}

else{
    esc_html_e('get in touch','bashir-rased');
}

else:
	esc_html_e('get in touch','bashir-rased');

endif;
?>