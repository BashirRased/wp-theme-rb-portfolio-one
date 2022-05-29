<?php
/**
 * The template for displaying frontpage skill section
 *
 * Part of skill section language subsection title
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.8
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-language-skills-title']) && !empty($bashir_rased_data['bashir-rased-language-skills-title'])){
    printf(
		/* translators: %s: Name of language skill title */
		__('%s','bashir-rased'),
		$bashir_rased_data['bashir-rased-language-skills-title']
	);
}

else{
    esc_html_e('my language skills:','bashir-rased');
}
?>