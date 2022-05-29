<?php
/**
 * The template for displaying frontpage contact me section
 *
 * Part of contact me section head
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.9
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');
if(isset($bashir_rased_data['bashir-rased-contact-header-title-black']) && !empty($bashir_rased_data['bashir-rased-contact-header-title-black'])){
    printf(
		/* translators: %s: contact me section head theme color */
		__('%s','bashir-rased'),
		$bashir_rased_data['bashir-rased-contact-header-title-black']
	);
}

else{
    esc_html_e('contact','bashir-rased');
}
?>

<span class="bashir-rased-theme-color">
<?php

if(isset($bashir_rased_data['bashir-rased-contact-header-title-theme-color']) && !empty($bashir_rased_data['bashir-rased-contact-header-title-theme-color'])){
    printf(
		/* translators: %s: contact me section head theme color */
		__(' %s','bashir-rased'),
		$bashir_rased_data['bashir-rased-contact-header-title-theme-color']
	);
}

else{
    esc_html_e('me','bashir-rased');
}
?>
</span>