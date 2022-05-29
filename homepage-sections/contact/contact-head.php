<?php
/**
 * The template for displaying frontpage contact me section
 *
 * Part of contact me section head
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.1
 */
 
global $bashir_rased_data;

if($bashir_rased_data):

$bashir_rased_contact_header_title_black = $bashir_rased_data['bashir-rased-contact-header-title-black'];

$bashir_rased_contact_header_title_theme_color = $bashir_rased_data['bashir-rased-contact-header-title-theme-color'];

if(isset($bashir_rased_contact_header_title_black) && !empty($bashir_rased_contact_header_title_black)){
    printf(
		/* translators: %s: contact me section head theme color */
		'%s',
		esc_html($bashir_rased_contact_header_title_black,'bashir-rased')
	);
}

else{
    esc_html_e('contact','bashir-rased');
}
?>

<span class="bashir-rased-theme-color">
<?php

if(isset($bashir_rased_contact_header_title_theme_color) && !empty($bashir_rased_contact_header_title_theme_color)){
    printf(
		/* translators: %s: contact me section head theme color */
		'%s',
		esc_html($bashir_rased_contact_header_title_theme_color,'bashir-rased')
	);
}

else{
    esc_html_e('me','bashir-rased');
}
?>
</span>

<?php else:

	esc_html_e('contact','bashir-rased'); ?>

	<span class="bashir-rased-theme-color">
		<?php esc_html_e('me','bashir-rased'); ?>
	</span>

<?php endif; ?>
