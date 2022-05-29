<?php 
/**
 * The template for displaying frontpage hire me section
 *
 * Part of hire me section title
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.6
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-hire-header-title']) && !empty($bashir_rased_data['bashir-rased-hire-header-title'])){
	printf(
		/* translators: %s: Name of hire me title */
		__('%s','bashir-rased'),
		$bashir_rased_data['bashir-rased-hire-header-title']
	);
}

else{
    esc_html_e('I am available for your next project...','bashir-rased');
}
?>