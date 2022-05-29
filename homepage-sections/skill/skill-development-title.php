<?php
/**
 * The template for displaying frontpage skill section
 *
 * Part of skill section development subsection title
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.2
 */
 
global $bashir_rased_data;

if ($bashir_rased_data) :

$bashir_rased_development_skills_title = $bashir_rased_data['bashir-rased-development-skills-title'];

if(isset($bashir_rased_development_skills_title) && !empty($bashir_rased_development_skills_title)){
    printf(
		/* translators: %s: Name of development skill title */
		'%s',
		esc_html($bashir_rased_development_skills_title,'bashir-rased')
	);
}

else{
    esc_html_e('my development skills:','bashir-rased');
}

else:
	esc_html_e('my development skills:','bashir-rased');

endif;
?>