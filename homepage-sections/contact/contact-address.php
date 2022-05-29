<?php
/**
 * The template for displaying frontpage contact me section
 *
 * Part of contact me section address
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.1
 */
 
global $bashir_rased_data;

if($bashir_rased_data):

$bashir_rased_address = $bashir_rased_data['bashir-rased-address'];

if(isset($bashir_rased_address) && !empty($bashir_rased_address)){
	printf(
		/* translators: %s: contact sectio address */
		'%s',
		esc_html($bashir_rased_address,'bashir-rased')
	);
}

else{
    esc_html_e('Dhaka, Bangladesh.','bashir-rased');
}

else:
    esc_html_e('Dhaka, Bangladesh.','bashir-rased');

endif;

?>