<?php
/**
 * The template for displaying frontpage skill section
 *
 * Part of skill section design subsection title
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.5
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-design-skills-title']) && !empty($bashir_rased_data['bashir-rased-design-skills-title'])){
    printf(
		/* translators: %s: Name of design skill title */
		__('%s','bashir-rased'),
		$bashir_rased_data['bashir-rased-design-skills-title']
	);
}

else{
    esc_html_e('my design skills:','bashir-rased');
}
?>