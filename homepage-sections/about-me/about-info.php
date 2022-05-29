<?php
/**
 * The template for displaying frontpage about me section
 *
 * Part of about me section info
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.1
 */
 
global $bashir_rased_data;

if($bashir_rased_data) :

$bashir_rased_about_infos = $bashir_rased_data['bashir-rased-about-info'];

if(isset($bashir_rased_about_infos) && !empty($bashir_rased_about_infos)) :

foreach ($bashir_rased_about_infos as $bashir_rased_about_info) :

$bashir_rased_about_info_strong_text = $bashir_rased_about_info['bashir-rased-about-info-strong-text'];

$bashir_rased_about_info_text = $bashir_rased_about_info['bashir-rased-about-info-text'];
?>

<li>
    
	<?php if(isset($bashir_rased_about_info_strong_text) && !empty($bashir_rased_about_info_strong_text)) : ?>
	<span class="bashir-rased-about-me-info-title">
        <?php
		printf(
			/* translators: %s: Name of about me info strong text */
			__('%s','bashir-rased'),
			$bashir_rased_about_info_strong_text
		);
		?> 
    </span>
    <span>
        <?php esc_html_e(':','bashir-rased'); ?>
    </span>
	<?php endif; ?>

	<?php if(isset($bashir_rased_about_info_text) && !empty($bashir_rased_about_info_text)) : ?>
    <span>
        <?php
		printf(
			/* translators: %s: Name of about me info text */
			__('%s','bashir-rased'),
			$bashir_rased_about_info_text
		);
		?> 
    </span>
	<?php endif; ?>

</li>

<?php 
	endforeach;
else: get_template_part('homepage-sections/about-me/about-info','else');
endif;
else: get_template_part('homepage-sections/about-me/about-info','else');
endif;
?>