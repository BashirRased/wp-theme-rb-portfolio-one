<?php
/**
 * The template for displaying frontpage contact me section
 *
 * Part of contact me section address
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.0
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-address']) && !empty($bashir_rased_data['bashir-rased-address'])){
	printf(
		/* translators: %s: contact sectio address */
		__('%s','bashir-rased'),
		$bashir_rased_data['bashir-rased-address']
	);
}

else{
    esc_html_e('Dhaka, Bangladesh.','bashir-rased');
}
?>