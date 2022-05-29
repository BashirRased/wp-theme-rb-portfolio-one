<?php
/**
 * The template for displaying frontpage header section
 *
 * Part of header section subtitle name
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.0
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-header-subtitle-name']) && !empty($bashir_rased_data['bashir-rased-header-subtitle-name'])){
    printf(
		/* translators: %s: Name of header subtitle name */
		__(' %s ','bashir-rased'),
		$bashir_rased_data['bashir-rased-header-subtitle-name']
	);
}

else {
esc_html_e(' Bashir Rased','bashir-rased');
}
?>