<?php 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-hire-header-title']) && !empty($bashir_rased_data['bashir-rased-hire-header-title'])){
echo wp_kses_post($bashir_rased_data['bashir-rased-hire-header-title']);
}

else{
    esc_html_e('I am available for your next project...','bashir-rased');
}
?>