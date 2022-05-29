<?php
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-header-subtitle-first'])){
    echo wp_kses_post($bashir_rased_data['bashir-rased-header-subtitle-first']);
}

else {
    esc_html_e('Hi! I\'m','bashir-rased');
}
?>