<?php 
/**
 * The template for displaying frontpage resume section
 *
 * Part of resume section work experiance subsection title
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.1
 */
 
global $bashir_rased_data;

if($bashir_rased_data) :

$bashir_rased_work_experiance_title = $bashir_rased_data['bashir-rased-work-experiance-title'];

if(isset($bashir_rased_work_experiance_title) && !empty($bashir_rased_work_experiance_title)){
	printf(
	/* translators: %s: Name of work experiance head title */
	'%s',
	esc_html($bashir_rased_work_experiance_title,'bashir-rased')
	);
}

else{
    esc_html_e('My Work Experiance','bashir-rased');
}

else : 
	esc_html_e('My Work Experiance','bashir-rased');

endif;
?>