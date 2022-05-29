<?php
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-development-skills-title']) && !empty($bashir_rased_data['bashir-rased-development-skills-title'])){
    echo wp_kses_post($bashir_rased_data['bashir-rased-development-skills-title']);
}

else{
    esc_html_e('my development skills:','bashir-rased');
}
?>