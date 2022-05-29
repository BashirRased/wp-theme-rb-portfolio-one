<?php
/**
 * The template for displaying frontpage header section
 *
 * Part of header section subtitle last part
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.2
 */
 
global $bashir_rased_data;

if($bashir_rased_data) :

$bashir_rased_header_subtitle_last = $bashir_rased_data['bashir-rased-header-subtitle-last'];

if(isset($bashir_rased_header_subtitle_last) && !empty($bashir_rased_header_subtitle_last)){
    printf(
		/* translators: %s: Name of header subtitle last */
		'%s',
		esc_html($bashir_rased_header_subtitle_last,'bashir-rased')
	);
} 

else {
esc_html_e('. Welcome, to my portfolio website.','bashir-rased');
}

else:
	esc_html_e('. Welcome, to my portfolio website.','bashir-rased');

endif;

?>