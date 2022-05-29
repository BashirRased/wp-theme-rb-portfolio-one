<?php
$bashir_rased_data = get_option('bashir_rased_theme_option');
if(isset($bashir_rased_data['bashir-rased-contact-header-title-black']) && !empty($bashir_rased_data['bashir-rased-contact-header-title-black'])){
    echo wp_kses_post($bashir_rased_data['bashir-rased-contact-header-title-black']);
}

else{
    esc_html_e('contact','bashir-rased');
}
?>

<span class="bashir-rased-theme-color">
<?php

if(isset($bashir_rased_data['bashir-rased-contact-header-title-theme-color']) && !empty($bashir_rased_data['bashir-rased-contact-header-title-theme-color'])){
    echo ' '.wp_kses_post($bashir_rased_data['bashir-rased-contact-header-title-theme-color']);
}

else{
    esc_html_e('me','bashir-rased');
}
?>
</span>