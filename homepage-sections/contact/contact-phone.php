<?php
/**
 * The template for displaying frontpage contact me section
 *
 * Part of contact me section phone
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */
 
$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
	$bashir_rased_phone_1 = $bashir_rased_data['bashir-rased-phone-number-1'];

	$bashir_rased_phone_2 = $bashir_rased_data['bashir-rased-phone-number-2'];
}

if(!empty($bashir_rased_phone_1)){
	printf(
		/* translators:
		%1$s: +88
		%2$s: phone number 1
		*/
		'%1$s %2$s',
		esc_html('+88','bashir-rased'),
		esc_html($bashir_rased_phone_1,'bashir-rased')
	);
}

if(!empty($bashir_rased_phone_2)){
    printf(
		/* translators:
		%1$s: +88
		%2$s: phone number 2
		*/
		'<br>%1$s %2$s',
		esc_html('+88','bashir-rased'),
		esc_html($bashir_rased_phone_2,'bashir-rased')
	);
}

if(empty($bashir_rased_phone_1) && !empty($bashir_rased_phone_2)){
    printf(
		/* translators: %s: phone number 2 */
		'%s',
		esc_html($bashir_rased_phone_2,'bashir-rased')
	);
}

?>