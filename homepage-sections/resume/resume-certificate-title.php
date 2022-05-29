<?php
/**
 * The template for displaying frontpage resume section
 *
 * Part of resume section certificate subsection title
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.4
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-certification-title']) && !empty($bashir_rased_data['bashir-rased-certification-title'])){
	printf(
	/* translators: %s: Name of certificate head title */
	__('%s','bashir-rased'),
	$bashir_rased_data['bashir-rased-certification-title']
	);
}

else{
    esc_html_e('Certification','bashir-rased');
}
?>