<?php 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-work-experiance-title']) && !empty($bashir_rased_data['bashir-rased-work-experiance-title'])){
echo wp_kses_post($bashir_rased_data['bashir-rased-work-experiance-title']);
}

else{
    esc_html_e('My Work Experiance','bashir-rased');
}
?>