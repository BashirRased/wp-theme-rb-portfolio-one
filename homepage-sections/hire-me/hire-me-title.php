<?php 
/**
 * The template for displaying frontpage hire me section
 *
 * Part of hire me section title
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.2
 */
 
global $bashir_rased_data;

if($bashir_rased_data):

$bashir_rased_hire_header_title = $bashir_rased_data['bashir-rased-hire-header-title'];

if(isset($bashir_rased_hire_header_title) && !empty($bashir_rased_hire_header_title)){
	printf(
		/* translators: %s: Name of hire me title */
		'%s',
		esc_html($bashir_rased_hire_header_title,'bashir-rased')
	);
}

else{
    esc_html_e('I am available for your next project...','bashir-rased');
}

else:
	esc_html_e('I am available for your next project...','bashir-rased');

endif;
?>