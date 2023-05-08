<?php
/**
 * The template for displaying frontpage header section
 *
 * Part of header section subtitle last part
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */
 
$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
	$bashir_rased_header_subtitle_last = $bashir_rased_data['bashir-rased-header-subtitle-last'];
}

if(!empty($bashir_rased_header_subtitle_last)){
    printf(
		/* translators: %s: Name of header subtitle last */
		'%s',
		esc_html($bashir_rased_header_subtitle_last,'bashir-rased')
	);
}