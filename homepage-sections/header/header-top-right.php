<?php
/**
 * The template for displaying frontpage header top section
 *
 * Part of header top section right
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.2
 */
 
global $bashir_rased_data;

if($bashir_rased_data) :

$bashir_rased_email_1 = $bashir_rased_data['bashir-rased-email-address-1'];

$bashir_rased_email_2 = $bashir_rased_data['bashir-rased-email-address-2'];

if(isset($bashir_rased_email_1) && !empty($bashir_rased_email_1)){
    printf(
		/* translators: %s: contact email 01 */
		'%s',
		esc_html($bashir_rased_email_1,'bashir-rased')
	);
}

else {
    esc_html_e('info@bashir-rased.com','bashir-rased');
}

if(isset($bashir_rased_email_2) && !empty($bashir_rased_email_2)){
    printf(
		/* translators:
		%1$s: ,
		%2$s: contact email 02
		*/
		'%1$s %2$s',
		esc_html(',','bashir-rased'),
		esc_html($bashir_rased_email_2,'bashir-rased')
	);
}

elseif(empty($bashir_rased_email_1) && isset($bashir_rased_email_2) && !empty($bashir_rased_email_2)){
    printf(
		/* translators: %s: contact email 02 */
		'%s',
		esc_html($bashir_rased_email_2,'bashir-rased')
	);
}

else {
    esc_html_e(', bashir.rased@gmail.com','bashir-rased');
}

else : 
	esc_html_e('info@bashir-rased.com, bashir.rased@gmail.com','bashir-rased');

endif;
?>