<?php
/**
 * The template for displaying frontpage header section
 *
 * Part of header section subtitle first part
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.8
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-header-subtitle-first'])){
    printf(
		/* translators: %s: Name of header subtitle first */
		__('%s','bashir-rased'),
		$bashir_rased_data['bashir-rased-header-subtitle-first']
	);
}

else {
    esc_html_e('Hi! I\'m','bashir-rased');
}
?>