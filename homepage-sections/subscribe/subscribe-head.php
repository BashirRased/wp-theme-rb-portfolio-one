<?php
/**
 * The template for displaying frontpage subscribe section
 *
 * Part of subscribe section header
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.8
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-subscribe-header-title']) && !empty($bashir_rased_data['bashir-rased-subscribe-header-title'])){
printf(
	/* translators: %s: Name of subscribe header */
	__( '%s', 'bashir-rased' ),
	$bashir_rased_data['bashir-rased-subscribe-header-title']
);
}

else{
    esc_html_e('subscribe to get newsletter','bashir-rased');
}
?>