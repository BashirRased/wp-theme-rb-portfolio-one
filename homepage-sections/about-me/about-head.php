<?php
/**
 * The template for displaying frontpage about me section
 *
 * Part of about me section head
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.0
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

$bashir_rased_about_header_title_black = $bashir_rased_data['bashir-rased-about-header-title-black'];

$bashir_rased_about_header_title_theme_color = $bashir_rased_data['bashir-rased-about-header-title-theme-color'];

if(isset($bashir_rased_about_header_title_black) && !empty($bashir_rased_about_header_title_black)){
    printf(
		/* translators: %s: Name of about me head */
		__('%s','bashir-rased'),
		$bashir_rased_about_header_title_black
	);
}

else{
    esc_html_e('about','bashir-rased');
}
?>

<span class="bashir-rased-theme-color">
<?php
if(isset($bashir_rased_about_header_title_theme_color) && !empty($bashir_rased_about_header_title_theme_color)){
    printf(
		/* translators: %s: Name of about me head theme color */
		__(' %s','bashir-rased'),
		$bashir_rased_about_header_title_theme_color
	);
}

else{
    esc_html_e('me','bashir-rased');
}
?>
</span>