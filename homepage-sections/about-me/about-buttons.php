<?php
$bashir_rased_data = get_option('bashir_rased_theme_option');
    $bashir_rased_about_me_btns = $bashir_rased_data['bashir-rased-about-btns'];
    if (isset($bashir_rased_about_me_btns) && !empty($bashir_rased_about_me_btns)) :
    foreach ($bashir_rased_about_me_btns as $bashir_rased_about_me_btn) :
?>

<div class="bashir-rased-btn">
    <a href="<?php
    if(isset($bashir_rased_about_me_btn['bashir-rased-about-btn-link']['url']) && !empty($bashir_rased_about_me_btn['bashir-rased-about-btn-link']['url'])){
        echo wp_kses_post($bashir_rased_about_me_btn['bashir-rased-about-btn-link']['url']);
    }
    
    else {
        echo esc_attr('#');
    }
    ?>" target="<?php
    if(isset($bashir_rased_about_me_btn['bashir-rased-about-btn-link']['target']) && !empty($bashir_rased_about_me_btn['bashir-rased-about-btn-link']['target'])){
        echo wp_kses_post($bashir_rased_about_me_btn['bashir-rased-about-btn-link']['target']);
    }
    
    else {
        echo esc_attr('_self');
    }
    ?>">
        <?php
        if(isset($bashir_rased_about_me_btn['bashir-rased-about-btn-link']['text']) && !empty($bashir_rased_about_me_btn['bashir-rased-about-btn-link']['text'])){
            echo wp_kses_post($bashir_rased_about_me_btn['bashir-rased-about-btn-link']['text']);
        }
        
        else {
            esc_html_e('Download CV','bashir-rased');
        }
        ?>
    </a>
</div>

<?php
    endforeach;
    else : 
?>

<div class="bashir-rased-btn">
    <a href="#bashir-rased-contact-me" target="_self">
        <?php esc_html_e('Download CV','bashir-rased'); ?>
    </a>
</div>
<div class="bashir-rased-btn" target="_self">
    <a href="#bashir-rased-contact-me">
        <?php esc_html_e('hire me','bashir-rased'); ?>
    </a>
</div>

<?php endif; ?>