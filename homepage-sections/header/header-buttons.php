<?php
/**
 * The template for displaying frontpage header section
 *
 * Part of header section buttons
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.1
 */
 
global $bashir_rased_data;

if ($bashir_rased_data) :

$bashir_rased_header_btns = $bashir_rased_data['bashir-rased-header-btn-group'];
    
if (isset($bashir_rased_header_btns) && !empty($bashir_rased_header_btns)) :

foreach ($bashir_rased_header_btns as $bashir_rased_header_btn) :

$bashir_rased_header_btn_link = $bashir_rased_header_btn['bashir-rased-header-btn-link']['url'];

$bashir_rased_header_btn_target = $bashir_rased_header_btn['bashir-rased-header-btn-link']['target'];

$bashir_rased_header_btn_text = $bashir_rased_header_btn['bashir-rased-header-btn-link']['text'];

if (isset($bashir_rased_header_btn_text) && !empty($bashir_rased_header_btn_text)) :
?>

<div class="bashir-rased-btn">
    <a href="<?php
    if(isset($bashir_rased_header_btn_link) && !empty($bashir_rased_header_btn_link)){
        echo esc_url($bashir_rased_header_btn_link);
    }    
    else {
        echo esc_url('#');
    }
    ?>" target="<?php
    if(isset($bashir_rased_header_btn_target) && !empty($bashir_rased_header_btn_target)){
        echo esc_attr($bashir_rased_header_btn_target);
    }    
    else {
        echo esc_attr('_self');
    }
    ?>">
        <?php
        if(isset($bashir_rased_header_btn_text) && !empty($bashir_rased_header_btn_text)){
            printf(
				/* translators: %s: Name of header buttons link text */
				'%s',
				esc_html($bashir_rased_header_btn_text,'bashir-rased')
			);
        }
        
        else {
            esc_html_e('contact me','bashir-rased');
        }
        ?>
    </a>
</div>

<?php else : ?>

<div class="bashir-rased-btn">
    <a href="#bashir-rased-contact-me" target="_self">
        <?php esc_html_e('contact me','bashir-rased'); ?>
    </a>
</div>

<div class="bashir-rased-btn">
    <a href="#bashir-rased-contact-me" target="_self">
        <?php esc_html_e('hire me','bashir-rased'); ?>
    </a>
</div>

<?php endif; ?>

<?php
    endforeach;
    else : 
?>

<div class="bashir-rased-btn">
    <a href="#bashir-rased-contact-me" target="_self">
        <?php esc_html_e('contact me','bashir-rased'); ?>
    </a>
</div>
<div class="bashir-rased-btn">
    <a href="#bashir-rased-contact-me" target="_self">
        <?php esc_html_e('hire me','bashir-rased'); ?>
    </a>
</div>

<?php endif; ?>

<?php else : ?>

<div class="bashir-rased-btn">
    <a href="#bashir-rased-contact-me" target="_self">
        <?php esc_html_e('contact me','bashir-rased'); ?>
    </a>
</div>
<div class="bashir-rased-btn">
    <a href="#bashir-rased-contact-me" target="_self">
        <?php esc_html_e('hire me','bashir-rased'); ?>
    </a>
</div>

<?php endif; ?>