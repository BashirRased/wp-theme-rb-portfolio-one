<?php
/**
 * The template for displaying frontpage about me section
 *
 * Part of about me section info
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.8
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(is_array($bashir_rased_data['bashir-rased-about-info']) || is_object($bashir_rased_data['bashir-rased-about-info'])){
	$bashir_rased_about_infos = $bashir_rased_data['bashir-rased-about-info'];
}
    
if (isset($bashir_rased_about_infos) && !empty($bashir_rased_about_infos)) :

foreach ($bashir_rased_about_infos as $bashir_rased_about_info) :
?>

<li>
    <span class="bashir-rased-about-me-info-title">
        <?php
		printf(
			/* translators: %s: Name of about me info strong text */
			__('%s','bashir-rased'),
			$bashir_rased_about_info['bashir-rased-about-info-strong-text']
		);
		?> 
    </span>
    <span>
        <?php esc_html_e(':','bashir-rased'); ?>
    </span>
    <span>
        <?php
		printf(
			/* translators: %s: Name of about me info text */
			__('%s','bashir-rased'),
			$bashir_rased_about_info['bashir-rased-about-info-text']
		);
		?> 
    </span>
</li>

<?php 
endforeach;

else: get_template_part('homepage-sections/about-me/about-info','else');

endif;

?>