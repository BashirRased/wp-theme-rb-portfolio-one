<?php
/**
 * The template for displaying frontpage header section
 *
 * Part of header section image
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
    $bashir_rased_header_img = $bashir_rased_data['bashir-rased-header-img'];
}

if(!empty($bashir_rased_header_img)): 
?>
 
<img src="<?php echo esc_url($bashir_rased_header_img['url']);
?>" />

<?php endif; ?>