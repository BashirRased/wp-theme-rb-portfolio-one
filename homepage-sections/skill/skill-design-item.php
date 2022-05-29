<?php
/**
 * The template for displaying frontpage skill section
 *
 * Part of skill section design subsection item
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.6
 */
 
    $bashir_rased_data = get_option('bashir_rased_theme_option');

    $bashir_rased_design_skills = isset($bashir_rased_data['bashir-rased-design-skill-item']);
    
    if (isset($bashir_rased_design_skills) && !empty($bashir_rased_design_skills)) :
    foreach ($bashir_rased_design_skills as $bashir_rased_design_skill) :
?>

<div class="bashir-rased-skills-bar-text-area">
    <div class="bashir-rased-skills-text-left float-start">
        <?php
		printf(
			/* translators: %s: Name of design skill bar text */
			__('%s','bashir-rased'),
			$bashir_rased_design_skill['bashir-rased-design-skill-text']
		);
		?>
		
    </div>
    <div class="bashir-rased-skills-text-right float-end">
        <?php
		printf(
			/* translators:
			%1$s: Name of design skill bar value
			%2$s: %
			*/
			__( '%1$s%2$s', 'bashir-rased' ),
			$bashir_rased_design_skill['bashir-rased-design-skill-value'],
			'%'
		);
		?>
    </div>
</div>
<div class="bashir-rased-skills-bar" data-percent = "<?php echo wp_kses_post($bashir_rased_design_skill['bashir-rased-design-skill-value']).'%'; ?>
">
    <div class="bashir-rased-skills-bar-animation"></div>
</div>

<?php 
endforeach;

else: get_template_part('homepage-sections/skill/skill-design-item','else');

endif;

?>