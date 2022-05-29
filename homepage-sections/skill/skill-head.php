<?php
/**
 * The template for displaying frontpage skill section
 *
 * Part of skill section head
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.2
 */

global $bashir_rased_data;

if($bashir_rased_data):

$bashir_rased_skill_header_title_theme_color = $bashir_rased_data['bashir-rased-skill-header-title-theme-color'];

$bashir_rased_skill_header_title_black = $bashir_rased_data['bashir-rased-skill-header-title-black'];
 
?>

<span class="bashir-rased-theme-color">
<?php
if(isset($bashir_rased_skill_header_title_theme_color) && !empty($bashir_rased_skill_header_title_theme_color)){
    printf(
		/* translators: %s: Name of skill title theme color */
		'%s',
		esc_html($bashir_rased_skill_header_title_theme_color,'bashir-rased')
	);
}

else{
    esc_html_e('my','bashir-rased');
} ?>
</span>

<?php if(isset($bashir_rased_skill_header_title_black) && !empty($bashir_rased_skill_header_title_black)){
    printf(
		/* translators: %s: Name of skill title color */
		'%s',
		esc_html($bashir_rased_skill_header_title_black,'bashir-rased')
	);
}

else{
    esc_html_e('skills','bashir-rased');
}

else:

?>

<span class="bashir-rased-theme-color">
	<?php esc_html_e('my','bashir-rased'); ?>
</span>

<?php

	esc_html_e('skills','bashir-rased');

endif;