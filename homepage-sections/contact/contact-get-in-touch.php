<?php 
/**
 * The template for displaying frontpage contact me section
 *
 * Part of contact me section get in touch
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */
 
$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
	$bashir_rased_get_in_touch_title = $bashir_rased_data['bashir-rased-get-in-touch-title'];
}

if(!empty($bashir_rased_get_in_touch_title)){
	printf(
		/* translators: %s: contact me section get in touch title */
		'%s',
		esc_html($bashir_rased_get_in_touch_title,'bashir-rased')
	);
}