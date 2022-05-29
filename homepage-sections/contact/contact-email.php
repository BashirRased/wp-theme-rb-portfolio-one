<?php
/**
 * The template for displaying frontpage contact me section
 *
 * Part of contact me section e-mail
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.5
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-email-address-1']) && !empty($bashir_rased_data['bashir-rased-email-address-1'])){
    printf(
		/* translators: %s: contact email 01 */
		__('%s','bashir-rased'),
		$bashir_rased_data['bashir-rased-email-address-1']
	);
}

else {
    esc_html_e('info@bashir-rased.com','bashir-rased');
}

if(isset($bashir_rased_data['bashir-rased-email-address-2']) && !empty($bashir_rased_data['bashir-rased-email-address-2'])){
    printf(
		/* translators: %s: contact email 02 */
		__(',<br>%s','bashir-rased'),
		$bashir_rased_data['bashir-rased-email-address-2']
	);
}

elseif (isset($bashir_rased_data['bashir-rased-email-address-2']) && empty($bashir_rased_data['bashir-rased-email-address-2'])) {
}

else {
    esc_html_e(',<br>bashir.rased@gmail.com','bashir-rased');
}                            
?>