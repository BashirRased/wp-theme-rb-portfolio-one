<span class="bashir-rased-theme-color">
<?php
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-skill-header-title-theme-color']) && !empty($bashir_rased_data['bashir-rased-skill-header-title-theme-color'])){
    echo wp_kses_post($bashir_rased_data['bashir-rased-skill-header-title-theme-color']);
}

else{
    esc_html_e('my','bashir-rased');
} ?>
</span>

<?php if(isset($bashir_rased_data['bashir-rased-skill-header-title-black']) && !empty($bashir_rased_data['bashir-rased-skill-header-title-black'])){
    echo ' '.wp_kses_post($bashir_rased_data['bashir-rased-skill-header-title-black']);
}

else{
    esc_html_e('skills','bashir-rased');
} ?>