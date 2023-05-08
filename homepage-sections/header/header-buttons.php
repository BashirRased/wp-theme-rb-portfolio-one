<?php
/**
 * The template for displaying frontpage header section
 *
 * Part of header section buttons
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */
 
$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
    $bashir_rased_header_btns = $bashir_rased_data['bashir-rased-header-btn-group'];
}

foreach ($bashir_rased_header_btns as $bashir_rased_header_btn) :

$bashir_rased_header_btn_link = $bashir_rased_header_btn['bashir-rased-header-btn-link'];

if (!empty($bashir_rased_header_btn_text)) :
?>

<div class="bashir-rased-btn">
    <a href="<?php
    if(!empty($bashir_rased_header_btn_link)){
        echo esc_url($bashir_rased_header_btn_link['url']);
    }
    ?>" target="<?php
    if(!empty($bashir_rased_header_btn_link)){
        echo esc_attr($bashir_rased_header_btn_link['target']);
    }
    ?>">
        <?php
        if(isset($bashir_rased_header_btn_link) && !empty($bashir_rased_header_btn_link)){
            printf(
				/* translators: %s: Name of header buttons link text */
				'%s',
				esc_html($bashir_rased_header_btn_link['text'],'bashir-rased')
			);
        }
        ?>
    </a>
</div>

<?php endif; ?>

<?php endforeach; ?>