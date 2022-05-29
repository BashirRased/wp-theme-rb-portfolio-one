<?php 
/**
 * The template for displaying frontpage resume section
 *
 * Part of resume section work experiance subsection title
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.4
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-work-experiance-title']) && !empty($bashir_rased_data['bashir-rased-work-experiance-title'])){
	printf(
	/* translators: %s: Name of work experiance head title */
	__('%s','bashir-rased'),
	$bashir_rased_data['bashir-rased-work-experiance-title']
	);
}

else{
    esc_html_e('My Work Experiance','bashir-rased');
}
?>