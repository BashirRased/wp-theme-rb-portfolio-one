<?php 
/**
 * The template for displaying frontpage contact me section
 *
 * Part of contact me section message title
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.2
 */
 
global $bashir_rased_data;

if($bashir_rased_data):

$bashir_rased_massage_title = $bashir_rased_data['bashir-rased-massage-title'];

if(isset($bashir_rased_massage_title) && !empty($bashir_rased_massage_title)){
	printf(
		/* translators: %s: contact me section message title */
		'%s',
		esc_html($bashir_rased_massage_title,'bashir-rased')
	);
}

else{
    esc_html_e('massage me','bashir-rased');
}

else:
	esc_html_e('massage me','bashir-rased');

endif;
?>