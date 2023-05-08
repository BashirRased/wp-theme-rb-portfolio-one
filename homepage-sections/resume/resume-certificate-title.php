<?php
/**
 * The template for displaying frontpage resume section
 *
 * Part of resume section certificate subsection title
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */
 
$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
	$bashir_rased_certification_title = $bashir_rased_data['bashir-rased-certification-title'];
}

if(!empty($bashir_rased_certification_title)){
	printf(
	/* translators: %s: Name of certificate head title */
	'%s',
	esc_html($bashir_rased_certification_title,'bashir-rased')
	);
}
?>