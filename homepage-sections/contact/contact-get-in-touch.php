<?php 
/**
 * The template for displaying frontpage contact me section
 *
 * Part of contact me section get in touch
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.0
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-get-in-touch-title']) && !empty($bashir_rased_data['bashir-rased-get-in-touch-title'])){
	printf(
		/* translators: %s: contact me section get in touch title */
		__('%s','bashir-rased'),
		$bashir_rased_data['bashir-rased-get-in-touch-title']
	);
}

else{
    esc_html_e('get in touch','bashir-rased');
}
?>