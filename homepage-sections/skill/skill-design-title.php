<?php
/**
 * The template for displaying frontpage skill section
 *
 * Part of skill section design subsection title
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.2
 */
 
global $bashir_rased_data;
if($bashir_rased_data):

$bashir_rased_design_skills_title = $bashir_rased_data['bashir-rased-design-skills-title'];

if(isset($bashir_rased_design_skills_title) && !empty($bashir_rased_design_skills_title)){
    printf(
		/* translators: %s: Name of design skill title */
		'%s',
		esc_html($bashir_rased_design_skills_title,'bashir-rased')
	);
}

else{
    esc_html_e('my design skills:','bashir-rased');
}

else:
    esc_html_e('my design skills:','bashir-rased');

endif;
?>