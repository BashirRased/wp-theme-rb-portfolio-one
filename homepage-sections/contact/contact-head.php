<?php
/**
 * The template for displaying frontpage contact me section
 *
 * Part of contact me section head
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */
 
$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
	$bashir_rased_contact_header_title_black = $bashir_rased_data['bashir-rased-contact-header-title-black'];

	$bashir_rased_contact_header_title_theme_color = $bashir_rased_data['bashir-rased-contact-header-title-theme-color'];
}

if(!empty($bashir_rased_contact_header_title_black)){
    printf(
		/* translators: %s: contact me section head theme color */
		'%s',
		esc_html($bashir_rased_contact_header_title_black,'bashir-rased')
	);
}
?>

<span class="bashir-rased-theme-color">
<?php

if(!empty($bashir_rased_contact_header_title_theme_color)){
    printf(
		/* translators: %s: contact me section head theme color */
		'%s',
		esc_html($bashir_rased_contact_header_title_theme_color,'bashir-rased')
	);
}
?>
</span>
