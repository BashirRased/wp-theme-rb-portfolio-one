<?php
/**
 * The template for displaying frontpage about me section
 *
 * Part of about me section head
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.6
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-about-header-title-black']) && !empty($bashir_rased_data['bashir-rased-about-header-title-black'])){
    printf(
		/* translators: %s: Name of about me head */
		__('%s','bashir-rased'),
		$bashir_rased_data['bashir-rased-about-header-title-black']
	);
}

else{
    esc_html_e('about','bashir-rased');
}
?>

<span class="bashir-rased-theme-color">
<?php
if(isset($bashir_rased_data['bashir-rased-about-header-title-theme-color']) && !empty($bashir_rased_data['bashir-rased-about-header-title-theme-color'])){
    printf(
		/* translators: %s: Name of about me head theme color */
		__(' %s','bashir-rased'),
		$bashir_rased_data['bashir-rased-about-header-title-theme-color']
	);
}

else{
    esc_html_e('me','bashir-rased');
}
?>
</span>