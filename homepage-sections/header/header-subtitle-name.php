<?php
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-header-subtitle-name']) && !empty($bashir_rased_data['bashir-rased-header-subtitle-name'])){
    echo ' '.wp_kses_post($bashir_rased_data['bashir-rased-header-subtitle-name']).'. ';
}

else {
esc_html_e(' Bashir Rased','bashir-rased');
}
?>