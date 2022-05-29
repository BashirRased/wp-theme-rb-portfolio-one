<?php
/**
 * The template for displaying frontpage service section
 *
 * Part of service section head
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.7
 */
 
?>

<span class="bashir-rased-theme-color">
<?php
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-service-header-title-theme-color']) && !empty($bashir_rased_data['bashir-rased-service-header-title-theme-color'])){
    printf(
	/* translators: %s: Name of service head title theme color */
	__(' %s','bashir-rased'),
	$bashir_rased_data['bashir-rased-service-header-title-theme-color']
	);
}

else{
    esc_html_e('my','bashir-rased');
} ?>
</span>

<?php if(isset($bashir_rased_data['bashir-rased-service-header-title-black']) && !empty($bashir_rased_data['bashir-rased-service-header-title-black'])){
    printf(
	/* translators: %s: Name of service head title */
	__(' %s','bashir-rased'),
	$bashir_rased_data['bashir-rased-service-header-title-black']
	);
}

else{
    esc_html_e('services','bashir-rased');
} ?>