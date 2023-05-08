<?php
/**
 * The template for displaying frontpage skill section
 *
 * Part of skill section design subsection title
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */
 
$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
	$bashir_rased_design_skills_title = $bashir_rased_data['bashir-rased-design-skills-title'];
}

if(!empty($bashir_rased_design_skills_title)){
    printf(
		/* translators: %s: Name of design skill title */
		'%s',
		esc_html($bashir_rased_design_skills_title,'bashir-rased')
	);
}
?>