<?php
/**
 * The template for displaying frontpage about me section
 *
 * Part of about me section buttons
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.2
 */
 
global $bashir_rased_data;

if($bashir_rased_data):

$bashir_rased_about_me_btns = $bashir_rased_data['bashir-rased-about-btns'];

if(isset($bashir_rased_about_me_btns) && !empty($bashir_rased_about_me_btns)):

foreach ($bashir_rased_about_me_btns as $bashir_rased_about_me_btn) :

$bashir_rased_about_me_btn_url = $bashir_rased_about_me_btn['bashir-rased-about-btn-link']['url'];

$bashir_rased_about_me_btn_target = $bashir_rased_about_me_btn['bashir-rased-about-btn-link']['target'];

$bashir_rased_about_me_btn_txt = $bashir_rased_about_me_btn['bashir-rased-about-btn-link']['text'];

if(isset($bashir_rased_about_me_btn_txt) && !empty($bashir_rased_about_me_btn_txt)):
?>

<!-- About Me Button Area Start Here -->
<div class="bashir-rased-about-me-btns">
    <div class="bashir-rased-btn">
        <a href="<?php
        if(isset($bashir_rased_about_me_btn_url) && !empty($bashir_rased_about_me_btn_url)){
            echo esc_url($bashir_rased_about_me_btn_url);
        }
        
        else {
            echo esc_url('#');
        }
        ?>" target="<?php
        if(isset($bashir_rased_about_me_btn_target) && !empty($bashir_rased_about_me_btn_target)){
            echo esc_attr($bashir_rased_about_me_btn_target);
        }
        
        else {
            echo esc_attr('_self');
        }
        ?>">
            <?php        
            printf(
                /* translators: %s: Name of about me button text */
                '%s',
                esc_html($bashir_rased_about_me_btn_txt,'bashir-rased')
            );
            ?>
        </a>
    </div>      
</div>
<!-- About Me Button Area End Here -->

<?php
    endif;
    endforeach;
    else:
?>

<!-- About Me Button Area Start Here -->
<div class="bashir-rased-about-me-btns">

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

</div>
<!-- About Me Button Area End Here -->

<?php
    endif;
    else:
?>

<!-- About Me Button Area Start Here -->
<div class="bashir-rased-about-me-btns">

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

</div>
<!-- About Me Button Area End Here -->

<?php endif; ?>