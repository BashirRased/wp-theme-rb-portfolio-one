<?php
/**
 * The template for displaying frontpage header section
 *
 * Part of header section subtitle first part
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.1
 */
 
global $bashir_rased_data;

if($bashir_rased_data):

$bashir_rased_header_subtitle_first = $bashir_rased_data['bashir-rased-header-subtitle-first'];

if(isset($bashir_rased_header_subtitle_first) && !empty($bashir_rased_header_subtitle_first)){
    printf(
		/* translators: %s: Name of header subtitle first */
		'%s',
		esc_html($bashir_rased_header_subtitle_first,'bashir-rased')
	);
}

else {
    esc_html_e('Hi! I\'m','bashir-rased');
}

else :
    esc_html_e('Hi! I\'m','bashir-rased');

endif;

?>