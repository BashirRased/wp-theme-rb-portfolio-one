<?php
/**
 * The template for displaying frontpage subscribe section
 *
 * Part of subscribe section header
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */
 
$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
	$bashir_rased_subscribe_header_title = $bashir_rased_data['bashir-rased-subscribe-header-title'];
}

if(!empty($bashir_rased_subscribe_header_title)){
	printf(
		/* translators: %s: Name of subscribe header */
		'%s',
		esc_html($bashir_rased_subscribe_header_title, 'bashir-rased')
	);
}

?>