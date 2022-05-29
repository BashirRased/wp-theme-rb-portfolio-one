<?php
/**
 * The template for displaying frontpage header section
 *
 * Part of header section buttons
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.8
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(is_array($bashir_rased_data['bashir-rased-header-btn-group']) || is_object($bashir_rased_data['bashir-rased-header-btn-group'])){
	$bashir_rased_header_btns = $bashir_rased_data['bashir-rased-header-btn-group'];
}
    
if (isset($bashir_rased_header_btns) && !empty($bashir_rased_header_btns)) :

foreach ($bashir_rased_header_btns as $bashir_rased_header_btn) :
?>

<div class="bashir-rased-btn">
    <a href="<?php
    if(isset($bashir_rased_header_btn['bashir-rased-header-btn-link']['url']) && !empty($bashir_rased_header_btn['bashir-rased-header-btn-link']['url'])){
        echo wp_kses_post($bashir_rased_header_btn['bashir-rased-header-btn-link']['url']);
    }
    
    else {
        echo esc_attr('#');
    }
    ?>" target="<?php
    if(isset($bashir_rased_header_btn['bashir-rased-header-btn-link']['target']) && !empty($bashir_rased_header_btn['bashir-rased-header-btn-link']['target'])){
        echo wp_kses_post($bashir_rased_header_btn['bashir-rased-header-btn-link']['target']);
    }
    
    else {
        echo esc_attr('_self');
    }
    ?>">
        <?php
        if(isset($bashir_rased_header_btn['bashir-rased-header-btn-link']['text']) && !empty($bashir_rased_header_btn['bashir-rased-header-btn-link']['text'])){
            printf(
				/* translators: %s: Name of header buttons link text */
				__('%s','bashir-rased'),
				$bashir_rased_header_btn['bashir-rased-header-btn-link']['text']
			);
        }
        
        else {
            esc_html_e('contact me','bashir-rased');
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
        <?php esc_html_e('contact me','bashir-rased'); ?>
    </a>
</div>
<div class="bashir-rased-btn">
    <a href="#bashir-rased-contact-me" target="_self">
        <?php esc_html_e('hire me','bashir-rased'); ?>
    </a>
</div>

<?php endif; ?>