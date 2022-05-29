<a href="<?php
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-hire-btn-link']['url']) && !empty($bashir_rased_data['bashir-rased-hire-btn-link']['url'])){
    echo wp_kses_post($bashir_rased_data['bashir-rased-hire-btn-link']['url']);
}

else {
    echo esc_attr('#');
}
?>" target="<?php
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(isset($bashir_rased_data['bashir-rased-hire-btn-link']['target']) && !empty($bashir_rased_data['bashir-rased-hire-btn-link']['target'])){
    echo wp_kses_post($bashir_rased_data['bashir-rased-hire-btn-link']['target']);
}

else {
    echo esc_attr('#');
}
?>">
    <?php
    if(isset($bashir_rased_data['bashir-rased-hire-btn-link']['text']) && !empty($bashir_rased_data['bashir-rased-hire-btn-link']['text'])){
        echo wp_kses_post($bashir_rased_data['bashir-rased-hire-btn-link']['text']);
    }
    
    else {
        esc_html_e('Hire Me','bashir-rased');
    }
    ?>
</a>