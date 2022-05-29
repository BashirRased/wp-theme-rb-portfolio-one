<?php
/**
 * The template for displaying frontpage skill section
 *
 * Part of skill section development subsection item
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.6
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

$bashir_rased_development_skills = isset($bashir_rased_data['bashir-rased-development-skill-item']);

if (isset($bashir_rased_development_skills) && !empty($bashir_rased_development_skills)) :

foreach ($bashir_rased_development_skills as $bashir_rased_development_skill) :
?>

<div class="bashir-rased-skills-bar-text-area">
    <div class="bashir-rased-skills-text-left float-start">
        <?php
		printf(
			/* translators: %s: Name of development skill bar text */
			__('%s','bashir-rased'),
			$bashir_rased_development_skill['bashir-rased-development-skill-text']
		);
		?>
    </div>
    <div class="bashir-rased-skills-text-right float-end">
        <?php
		printf(
			/* translators:
			%1$s: Name of development skill bar value
			%2$s: %
			*/
			__('%1$s%2$s','bashir-rased'),
			$bashir_rased_development_skill['bashir-rased-development-skill-value'],
			'%'
		);
		?>
    </div>
</div>
<div class="bashir-rased-skills-bar" data-percent = "<?php echo wp_kses_post($bashir_rased_development_skill['bashir-rased-development-skill-value']).'%'; ?>
">
    <div class="bashir-rased-skills-bar-animation"></div>
</div>

<?php 
endforeach;

else: get_template_part('homepage-sections/skill/skill-development-item','else');

endif;

?>