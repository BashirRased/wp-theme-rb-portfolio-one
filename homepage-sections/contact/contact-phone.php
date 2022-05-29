<?php
/**
 * The template for displaying frontpage contact me section
 *
 * Part of contact me section phone
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.1
 */
 
global $bashir_rased_data;

if($bashir_rased_data):

$bashir_rased_phone_1 = $bashir_rased_data['bashir-rased-phone-number-1'];
$bashir_rased_phone_2 = $bashir_rased_data['bashir-rased-phone-number-2'];

if(isset($bashir_rased_phone_1) && !empty($bashir_rased_phone_1)){
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

else {
    esc_html_e('+88 01934 109870','bashir-rased');
}

if(isset($bashir_rased_phone_2) && !empty($bashir_rased_phone_2)){
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

elseif(empty($bashir_rased_phone_1) && isset($bashir_rased_phone_2) && !empty($bashir_rased_phone_2)){
    printf(
		/* translators: %s: phone number 2 */
		'%s',
		esc_html($bashir_rased_phone_2,'bashir-rased')
	);
}

else {
    esc_html_e(',<br>+88 01841 109870','bashir-rased');
}

else:	
	esc_html_e('+88 01934 109870,','bashir-rased');
	?><br><?php
	esc_html_e('+88 01841 109870','bashir-rased');

endif;
?>