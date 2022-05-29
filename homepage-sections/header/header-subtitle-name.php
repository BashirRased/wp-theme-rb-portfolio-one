<?php
/**
 * The template for displaying frontpage header section
 *
 * Part of header section subtitle name
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.2
 */
 
global $bashir_rased_data;

if($bashir_rased_data) :

$bashir_rased_header_subtitle_name = $bashir_rased_data['bashir-rased-header-subtitle-name'];

if(isset($bashir_rased_header_subtitle_name) && !empty($bashir_rased_header_subtitle_name)){
    printf(
		/* translators: %s: Name of header subtitle name */
		' %s',
		esc_html($bashir_rased_header_subtitle_name,'bashir-rased')
	);
}

else {
esc_html_e(' Bashir Rased','bashir-rased');
}

else :
	esc_html_e(' Bashir Rased','bashir-rased');

endif;

?>