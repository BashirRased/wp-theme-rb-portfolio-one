<?php 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-certification-title']) && !empty($bashir_rased_data['bashir-rased-certification-title'])){
echo wp_kses_post($bashir_rased_data['bashir-rased-certification-title']);
}

else{
    esc_html_e('Certification','bashir-rased');
}
?>