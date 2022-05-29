<?php
/**
 * The template for displaying frontpage service section
 *
 * Part of service section head
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.1
 */

global $bashir_rased_data;

if($bashir_rased_data):

$bashir_rased_service_header_title_theme_color = $bashir_rased_data['bashir-rased-service-header-title-theme-color'];

$bashir_rased_service_header_title_black = $bashir_rased_data['bashir-rased-service-header-title-black'];
 
?>

<span class="bashir-rased-theme-color">
<?php
if(isset($bashir_rased_service_header_title_theme_color) && !empty($bashir_rased_service_header_title_theme_color)){
    printf(
	/* translators: %s: Name of service head title theme color */
	'%s',
	esc_html($bashir_rased_service_header_title_theme_color,'bashir-rased')
	);
}

else{
    esc_html_e('my','bashir-rased');
}

?>
</span>

<?php if(isset($bashir_rased_service_header_title_black) && !empty($bashir_rased_service_header_title_black)){
    printf(
	/* translators: %s: Name of service head title */
	' %s',
	esc_html($bashir_rased_service_header_title_black,'bashir-rased')
	);
}

else{
    esc_html_e(' services','bashir-rased');
}

else: ?>
	<span class="bashir-rased-theme-color">
		<?php esc_html_e('my','bashir-rased'); ?>
	</span>
	
<?php
	esc_html_e(' services','bashir-rased');

endif;

?>