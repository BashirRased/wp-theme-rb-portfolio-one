<?php
/**
 * The template for displaying frontpage about me section
 *
 * Part of about me section head
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */
 
$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
	$bashir_rased_about_header_title_black = $bashir_rased_data['bashir-rased-about-header-title-black'];

	$bashir_rased_about_header_title_theme_color = $bashir_rased_data['bashir-rased-about-header-title-theme-color'];
}

if(!empty($bashir_rased_about_header_title_black)) {
    printf(
		/* translators: %s: Name of about me head */
		'%s',
		esc_html($bashir_rased_about_header_title_black,'bashir-rased')
	);
}

?>

<span class="bashir-rased-theme-color">
<?php
if(!empty($bashir_rased_about_header_title_theme_color)){
    printf(
		/* translators: %s: Name of about me head theme color */
		'%s',
		esc_html($bashir_rased_about_header_title_theme_color,'bashir-rased')
	);
}
?>
</span>