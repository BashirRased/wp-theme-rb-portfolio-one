<?php
/**
 * The template for displaying frontpage header section
 *
 * Part of header section subtitle name
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */
 
$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
	$bashir_rased_header_subtitle_name = $bashir_rased_data['bashir-rased-header-subtitle-name'];
}

if(!empty($bashir_rased_header_subtitle_name)): ?>

<span class="bashir-rased-theme-color">
	<?php
		printf(
			/* translators: %s: Name of header subtitle name */
			' %s',
			esc_html($bashir_rased_header_subtitle_name,'bashir-rased')
		);
	?>
</span>

<?php
endif;