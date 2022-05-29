<?php
/**
 * The template for displaying frontpage header section
 *
 * Part of header section subtitle last part
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.5
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-header-subtitle-last']) && !empty($bashir_rased_data['bashir-rased-header-subtitle-last'])){
    printf(
		/* translators: %s: Name of header subtitle last */
		__('%s','bashir-rased'),
		$bashir_rased_data['bashir-rased-header-subtitle-last']
	);
} 

else {
esc_html_e('. Welcome, to my portfolio website.','bashir-rased');
}
?>