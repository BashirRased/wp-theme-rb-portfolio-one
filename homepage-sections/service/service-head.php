<?php
/**
 * The template for displaying frontpage service section
 *
 * Part of service section head
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
	$bashir_rased_service_header_title_theme_color = $bashir_rased_data['bashir-rased-service-header-title-theme-color'];

	$bashir_rased_service_header_title_black = $bashir_rased_data['bashir-rased-service-header-title-black'];
}

if(!empty($bashir_rased_service_header_title_theme_color)): ?>
	<span class="bashir-rased-theme-color">
		<?php
			printf(
			/* translators: %s: Name of service head title theme color */
			'%s',
			esc_html($bashir_rased_service_header_title_theme_color,'bashir-rased')
			);
		?>
	</span>
<?php endif;

if(!empty($bashir_rased_service_header_title_black)){
    printf(
	/* translators: %s: Name of service head title */
	' %s',
	esc_html($bashir_rased_service_header_title_black,'bashir-rased')
	);
}