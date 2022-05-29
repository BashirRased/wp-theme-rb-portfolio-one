<?php
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-phone-number-1']) && !empty($bashir_rased_data['bashir-rased-phone-number-1'])){
    echo '+88 '.wp_kses_post($bashir_rased_data['bashir-rased-phone-number-1']);
}

else {
    esc_html_e('+88 01934 109870','bashir-rased');
}

if(isset($bashir_rased_data['bashir-rased-phone-number-2']) && !empty($bashir_rased_data['bashir-rased-phone-number-2'])){
    echo ',<br>+88 '.wp_kses_post($bashir_rased_data['bashir-rased-phone-number-2']);
}

elseif (isset($bashir_rased_data['bashir-rased-phone-number-2']) && empty($bashir_rased_data['bashir-rased-phone-number-2'])) {
    echo '';
}

else {
    esc_html_e(',<br>+88 01841 109870','bashir-rased');
}                            
?>