<?php
/**
 * The template for displaying frontpage resume section
 *
 * Part of resume section certificate subsection title
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.1
 */
 
global $bashir_rased_data;

if ($bashir_rased_data):

$bashir_rased_certification_title = $bashir_rased_data['bashir-rased-certification-title'];

if(isset($bashir_rased_certification_title) && !empty($bashir_rased_certification_title)){
	printf(
	/* translators: %s: Name of certificate head title */
	'%s',
	esc_html($bashir_rased_certification_title,'bashir-rased')
	);
}

else{
    esc_html_e('Certification','bashir-rased');
}

else:
    esc_html_e('Certification','bashir-rased');

endif;
?>