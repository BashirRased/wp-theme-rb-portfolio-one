<?php
/**
 * The template for displaying frontpage about me section
 *
 * Part of about me section buttons
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */
 
$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
    $bashir_rased_about_me_btns = $bashir_rased_data['bashir-rased-about-btns'];
}

if(!empty($bashir_rased_about_me_btns)):

foreach ($bashir_rased_about_me_btns as $bashir_rased_about_me_btn) :

if ($bashir_rased_about_me_btns) {
    $bashir_rased_about_me_btn_url = $bashir_rased_about_me_btn['bashir-rased-about-btn-link'];
}

if(!empty($bashir_rased_about_me_btn_txt)):
?>

<!-- About Me Button Area Start Here -->
<div class="bashir-rased-about-me-btns">
    <div class="bashir-rased-btn">
        <a href="<?php
        if(!empty($bashir_rased_about_me_btn_url)){
            echo esc_url($bashir_rased_about_me_btn_url['url']);
        }
        ?>" target="<?php
        if(!empty($bashir_rased_about_me_btn_url)){
            echo esc_attr($bashir_rased_about_me_btn_url['target']);
        }
        ?>">
            <?php        
            printf(
                /* translators: %s: Name of about me button text */
                '%s',
                esc_html($bashir_rased_about_me_btn_url['text'],'bashir-rased')
            );
            ?>
        </a>
    </div>      
</div>
<!-- About Me Button Area End Here -->

<?php
    endif;
    endforeach;
?>

<?php
    endif;
?>