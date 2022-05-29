<?php
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-header-subtitle-last']) && !empty($bashir_rased_data['bashir-rased-header-subtitle-last'])){
    echo wp_kses_post($bashir_rased_data['bashir-rased-header-subtitle-last']);
} 

else {
esc_html_e('. Welcome, to my portfolio website.','bashir-rased');
}
?>