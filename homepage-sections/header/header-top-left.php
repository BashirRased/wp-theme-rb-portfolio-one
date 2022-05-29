<?php
/**
 * The template for displaying frontpage header top section
 *
 * Part of header top section left
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.5
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-phone-number-1']) && !empty($bashir_rased_data['bashir-rased-phone-number-1'])){
	printf(
		/* translators: %s: phone number 1 */
		__('+88 %s','bashir-rased'),
		$bashir_rased_data['bashir-rased-phone-number-1']
	);    
}

else {
    esc_html_e('+88 01934 109870','bashir-rased');
}

if(isset($bashir_rased_data['bashir-rased-phone-number-2']) && !empty($bashir_rased_data['bashir-rased-phone-number-2'])){
	printf(
		/* translators: %s: phone number 2 */
		__(', +88 %s','bashir-rased'),
		$bashir_rased_data['bashir-rased-phone-number-2']
	);
}

elseif (isset($bashir_rased_data['bashir-rased-phone-number-2']) && empty($bashir_rased_data['bashir-rased-phone-number-2'])) {
	
}

else {
    esc_html_e(', +88 01841 109870','bashir-rased');
}                            
?>