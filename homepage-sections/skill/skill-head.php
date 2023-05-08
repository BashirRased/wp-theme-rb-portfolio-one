<?php
/**
 * The template for displaying frontpage skill section
 *
 * Part of skill section head
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
	$bashir_rased_skill_header_title_theme_color = $bashir_rased_data['bashir-rased-skill-header-title-theme-color'];

	$bashir_rased_skill_header_title_black = $bashir_rased_data['bashir-rased-skill-header-title-black'];
}
 
?>

<span class="bashir-rased-theme-color">
<?php
if(!empty($bashir_rased_skill_header_title_theme_color)){
    printf(
		/* translators: %s: Name of skill title theme color */
		'%s',
		esc_html($bashir_rased_skill_header_title_theme_color,'bashir-rased')
	);
} ?>
</span>

<?php if(!empty($bashir_rased_skill_header_title_black)){
    printf(
		/* translators: %s: Name of skill title color */
		'%s',
		esc_html($bashir_rased_skill_header_title_black,'bashir-rased')
	);
}