<?php
/**
 * The template for displaying frontpage hire me section
 *
 * Part of hire me section buttons
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
	$bashir_rased_hire_btn_link = $bashir_rased_data['bashir-rased-hire-btn-link'];
}

if(!empty($bashir_rased_hire_btn_link)):
 
?>
 
<a href="<?php echo esc_url($bashir_rased_hire_btn_link['url']); ?>" target="<?php echo esc_attr($bashir_rased_hire_btn_link['target']); 
?>">
    <?php 
        printf(
			/* translators: %s: Name of hire me button text */
			'%s',
			esc_html($bashir_rased_hire_btn_link['text'],'bashir-rased')
		);
    ?>
</a>

<?php endif; ?>