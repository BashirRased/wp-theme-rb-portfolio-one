<?php
/**
 * The template for displaying frontpage skill section
 *
 * Part of skill section language subsection title
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.1
 */
 
global $bashir_rased_data;

if($bashir_rased_data):

$bashir_rased_language_skills_title = $bashir_rased_data['bashir-rased-language-skills-title'];

if(isset($bashir_rased_language_skills_title) && !empty($bashir_rased_language_skills_title)){
    printf(
		/* translators: %s: Name of language skill title */
		'%s',
		esc_html($bashir_rased_language_skills_title,'bashir-rased')
	);
}

else{
    esc_html_e('my language skills:','bashir-rased');
}

else:
    esc_html_e('my language skills:','bashir-rased');

endif;
?>