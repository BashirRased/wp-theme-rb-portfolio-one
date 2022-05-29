<?php
/**
 * The template for displaying frontpage header section
 *
 * Part of header section title first
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.8
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-header-title-first']) && !empty($bashir_rased_data['bashir-rased-header-title-first'])){
    printf(
		/* translators: %s: Name of header title first */
		__('%s','bashir-rased'),
		$bashir_rased_data['bashir-rased-header-title-first']
	);
}

else {
esc_html_e('I\'m a ','bashir-rased');
}
?>