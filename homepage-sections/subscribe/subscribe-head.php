<?php 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-subscribe-header-title']) && !empty($bashir_rased_data['bashir-rased-subscribe-header-title'])){
echo wp_kses_post($bashir_rased_data['bashir-rased-subscribe-header-title']);
}

else{
    esc_html_e('subscribe to get newsletter','bashir-rased');
}
?>