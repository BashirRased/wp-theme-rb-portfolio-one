<img src="<?php
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-about-img']['url']) && !empty($bashir_rased_data['bashir-rased-about-img']['url'])){
    echo wp_kses_post($bashir_rased_data['bashir-rased-about-img']['url']);
}

else{
    echo esc_url(get_template_directory_uri().'/assets/img/Bashir-Rased-02.jpg');
}
?>" alt="<?php echo esc_attr('Bashir Rased', 'bashir-rased'); ?>" />