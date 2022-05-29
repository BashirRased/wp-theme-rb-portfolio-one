<?php
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-header-title-first']) && !empty($bashir_rased_data['bashir-rased-header-title-first'])){
    echo wp_kses_post($bashir_rased_data['bashir-rased-header-title-first']);
}

else {
esc_html_e('I\'m a ','bashir-rased');
}
?>