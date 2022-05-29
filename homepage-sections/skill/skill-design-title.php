<?php
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-design-skills-title']) && !empty($bashir_rased_data['bashir-rased-design-skills-title'])){
    echo wp_kses_post($bashir_rased_data['bashir-rased-design-skills-title']);
}

else{
    esc_html_e('my design skills:','bashir-rased');
}
?>