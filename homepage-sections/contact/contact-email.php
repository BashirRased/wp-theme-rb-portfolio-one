<?php
/**
 * The template for displaying frontpage contact me section
 *
 * Part of contact me section e-mail
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */
 
$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
	$bashir_rased_email_1 =	$bashir_rased_data['bashir-rased-email-address-1'];

	$bashir_rased_email_2 =	$bashir_rased_data['bashir-rased-email-address-2'];
}

if(!empty($bashir_rased_email_1)){
    printf(
		/* translators: %s: contact email 01 */
		'%s',
		esc_html($bashir_rased_email_1,'bashir-rased')
	);
}

if(!empty($bashir_rased_email_2)){
    printf(
		/* translators: %s: contact email 02 */
		',<br>%s',
		esc_html($bashir_rased_email_2,'bashir-rased')
	);
}

elseif(empty($bashir_rased_email_1) && !empty($bashir_rased_email_2)){
    printf(
		/* translators: %s: contact email 02 */
		'%s',
		esc_html($bashir_rased_email_2,'bashir-rased')
	);
}
?>