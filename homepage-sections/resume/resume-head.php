<?php
/**
 * The template for displaying frontpage resume section
 *
 * Part of resume section head
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
	$bashir_rased_resume_header_title_theme_color = $bashir_rased_data['bashir-rased-resume-header-title-theme-color'];

	$bashir_rased_resume_header_title_black = $bashir_rased_data['bashir-rased-resume-header-title-black'];
}

if(!empty($bashir_rased_resume_header_title_theme_color)): ?>
	<span class="bashir-rased-theme-color">
		<?php
			printf(
			/* translators: %s: Name of resume head theme color title */
			'%s',
			esc_html($bashir_rased_resume_header_title_theme_color,'bashir-rased')
			);
		?>
	</span>
<?php endif; 

if(!empty($bashir_rased_resume_header_title_black)){
    printf(
	/* translators: %s: Name of resume head title */
	' %s',
	esc_html($bashir_rased_resume_header_title_black,'bashir-rased')
	);
}