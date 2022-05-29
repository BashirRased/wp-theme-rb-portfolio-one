<?php
/**
 * The template for displaying frontpage header section
 *
 * Part of header section title first
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.1
 */
 
global $bashir_rased_data;

if($bashir_rased_data):

$bashir_rased_header_title_first = $bashir_rased_data['bashir-rased-header-title-first'];

if(isset($bashir_rased_header_title_first) && !empty($bashir_rased_header_title_first)){
    printf(
		/* translators: %s: Name of header title first */
		'%s ',
		esc_html($bashir_rased_header_title_first,'bashir-rased')
	);
}

else {
esc_html_e('I\'m a ','bashir-rased');
}

else :
	esc_html_e('I\'m a ','bashir-rased');

endif;

?>