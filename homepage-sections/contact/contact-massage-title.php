<?php 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-massage-title']) && !empty($bashir_rased_data['bashir-rased-massage-title'])){
echo wp_kses_post($bashir_rased_data['bashir-rased-massage-title']);
}

else{
    esc_html_e('massage me','bashir-rased');
}
?>