<?php
/**
 * The template for displaying frontpage skill section
 *
 * Part of skill section design subsection item
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.1
 */
 
global $bashir_rased_data;

if($bashir_rased_data) :

$bashir_rased_design_skills = $bashir_rased_data['bashir-rased-design-skill-item'];
    
if (isset($bashir_rased_design_skills) && !empty($bashir_rased_design_skills)) :

foreach ($bashir_rased_design_skills as $bashir_rased_design_skill) :

$bashir_rased_design_skill_text = $bashir_rased_design_skill['bashir-rased-design-skill-text'];

$bashir_rased_design_skill_value = $bashir_rased_design_skill['bashir-rased-design-skill-value'];
?>

<div class="bashir-rased-skills-bar-text-area">

	<?php if(isset($bashir_rased_design_skill_text) && !empty($bashir_rased_design_skill_text)): ?>
    <div class="bashir-rased-skills-text-left float-start">
        <?php
			printf(
				/* translators: %s: Name of design skill bar text */
				'%s',
				esc_html($bashir_rased_design_skill_text,'bashir-rased')
			);
		?>
		
    </div>
	<?php endif; ?>

	<?php if(isset($bashir_rased_design_skill_value) && !empty($bashir_rased_design_skill_value)): ?>
    <div class="bashir-rased-skills-text-right float-end">
        <?php
			printf(
				/* translators:
				%1$s: Name of design skill bar value
				%2$s: %
				*/
				'%1$s%2$s',
				esc_html($bashir_rased_design_skill_value, 'bashir-rased'),
				esc_html('%', 'bashir-rased')
			);
		?>
    </div>
	<?php endif; ?>

</div>

<?php if(isset($bashir_rased_design_skill_value) && !empty($bashir_rased_design_skill_value)): ?>
<div class="bashir-rased-skills-bar" data-percent = "<?php echo esc_attr($bashir_rased_design_skill_value).'%'; ?>
">
    <div class="bashir-rased-skills-bar-animation"></div>
</div>
<?php endif; ?>

<?php 
endforeach;

else: get_template_part('homepage-sections/skill/skill-design-item','else');

endif;

else: get_template_part('homepage-sections/skill/skill-design-item','else');

endif;

?>