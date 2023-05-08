<?php
/**
 * The template for displaying frontpage about me section
 *
 * Part of about me section image
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
    $bashir_rased_about_img_url = $bashir_rased_data['bashir-rased-about-img'];
}

if( !empty ($bashir_rased_about_img_url) ) :
 
?>

<!-- About Me Image Area Start Here -->
<div class="bashir-rased-about-me-section-img">
    <img src="<?php
        echo esc_url($bashir_rased_about_img_url['url']);
    ?>" />
</div>
<!-- About Me Image Area End Here -->

<?php endif; ?>