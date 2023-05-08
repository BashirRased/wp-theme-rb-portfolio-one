<?php
/**
 * The template for displaying frontpage about me section
 *
 * Part of about me section description
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */
 
$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
    $bashir_rased_about_desc = $bashir_rased_data['bashir-rased-about-desc']; 
}

?>

<!-- About Me Content Area Start Here -->
<div class="bashir-rased-about-me-content">
    <?php
    if(!empty($bashir_rased_about_desc)) :
    printf(
		/* translators: %s: Name of about me description */
		'%s',
        esc_html($bashir_rased_about_desc,'bashir-rased')
	); ?>

    <?php endif; ?>
</div>
<!-- About Me Content Area End Here -->