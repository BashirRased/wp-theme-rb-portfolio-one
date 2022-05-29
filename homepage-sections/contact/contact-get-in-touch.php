<?php 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-get-in-touch-title']) && !empty($bashir_rased_data['bashir-rased-get-in-touch-title'])){
echo wp_kses_post($bashir_rased_data['bashir-rased-get-in-touch-title']);
}

else{
    esc_html_e('get in touch','bashir-rased');
}
?>