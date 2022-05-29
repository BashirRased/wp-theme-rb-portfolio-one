<?php 
/**
 * The template for displaying frontpage contact me section
 *
 * Part of contact me section message title
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.9
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-massage-title']) && !empty($bashir_rased_data['bashir-rased-massage-title'])){
	printf(
		/* translators: %s: contact me section message title */
		__('%s','bashir-rased'),
		$bashir_rased_data['bashir-rased-massage-title']
	);
}

else{
    esc_html_e('massage me','bashir-rased');
}
?>