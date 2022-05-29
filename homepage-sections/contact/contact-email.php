<?php
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-email-address-1']) && !empty($bashir_rased_data['bashir-rased-email-address-1'])){
    echo wp_kses_post($bashir_rased_data['bashir-rased-email-address-1']);
}

else {
    esc_html_e('info@bashir-rased.com','bashir-rased');
}

if(isset($bashir_rased_data['bashir-rased-email-address-2']) && !empty($bashir_rased_data['bashir-rased-email-address-2'])){
    echo ',<br>'.wp_kses_post($bashir_rased_data['bashir-rased-email-address-2']);
}

elseif (isset($bashir_rased_data['bashir-rased-email-address-2']) && empty($bashir_rased_data['bashir-rased-email-address-2'])) {
    echo '';
}

else {
    esc_html_e(',<br>bashir.rased@gmail.com','bashir-rased');
}                            
?>