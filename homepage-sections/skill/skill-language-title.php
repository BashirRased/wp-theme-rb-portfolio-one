<?php
/**
 * The template for displaying frontpage skill section
 *
 * Part of skill section language subsection title
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */
 
$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
	$bashir_rased_language_skills_title = $bashir_rased_data['bashir-rased-language-skills-title'];
}

if(!empty($bashir_rased_language_skills_title)){
    printf(
		/* translators: %s: Name of language skill title */
		'%s',
		esc_html($bashir_rased_language_skills_title,'bashir-rased')
	);
}
?>