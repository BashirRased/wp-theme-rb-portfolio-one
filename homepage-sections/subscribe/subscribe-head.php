<?php
/**
 * The template for displaying frontpage subscribe section
 *
 * Part of subscribe section header
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.2
 */
 
global $bashir_rased_data;

if($bashir_rased_data):

$bashir_rased_subscribe_header_title = $bashir_rased_data['bashir-rased-subscribe-header-title'];


if(isset($bashir_rased_subscribe_header_title) && !empty($bashir_rased_subscribe_header_title)){
	printf(
		/* translators: %s: Name of subscribe header */
		'%s',
		esc_html($bashir_rased_subscribe_header_title, 'bashir-rased')
	);
}

else{
    esc_html_e('subscribe to get newsletter','bashir-rased');
}

else:
	esc_html_e('subscribe to get newsletter','bashir-rased');

endif;

?>