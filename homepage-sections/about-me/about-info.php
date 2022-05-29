<?php
    $bashir_rased_data = get_option('bashir_rased_theme_option');

    if(is_array($bashir_rased_data)) {
        $bashir_rased_about_infos = $bashir_rased_data['bashir-rased-about-info'];
    }
    
    if (isset($bashir_rased_about_infos) && !empty($bashir_rased_about_infos)) :
    foreach ($bashir_rased_about_infos as $bashir_rased_about_info) :
?>

<li>
    <span class="bashir-rased-about-me-info-title">
        <?php echo wp_kses_post($bashir_rased_about_info['bashir-rased-about-info-strong-text']); ?> 
    </span>
    <span>
        <?php esc_html_e(':','bashir-rased'); ?>
    </span>
    <span>
        <?php echo wp_kses_post($bashir_rased_about_info['bashir-rased-about-info-text']); ?> 
    </span>
</li>

<?php 
endforeach;

else: get_template_part('homepage-sections/about-me/about-info','else');

endif;

?>