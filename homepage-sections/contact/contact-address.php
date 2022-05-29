<?php 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-address']) && !empty($bashir_rased_data['bashir-rased-address'])){
echo wp_kses_post($bashir_rased_data['bashir-rased-address']);
}

else{
    esc_html_e('Dhaka, Bangladesh.','bashir-rased');
}
?>