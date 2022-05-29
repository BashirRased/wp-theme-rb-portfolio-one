<?php
/**
 * The template for displaying frontpage skill section
 *
 * Part of skill section language subsection item
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.1
 */
 
global $bashir_rased_data;

if ($bashir_rased_data):

$bashir_rased_language_skills = $bashir_rased_data['bashir-rased-language-skill-item'];

if (isset($bashir_rased_language_skills) && !empty($bashir_rased_language_skills)) :

foreach ($bashir_rased_language_skills as $bashir_rased_language_skill) :

$bashir_rased_language_skill_text = $bashir_rased_language_skill['bashir-rased-language-skill-text'];

$bashir_rased_language_skill_value_1 = $bashir_rased_language_skill['bashir-rased-language-skill-value-1'];

$bashir_rased_language_skill_value_2 = $bashir_rased_language_skill['bashir-rased-language-skill-value-2'];

$bashir_rased_language_skill_value_3 = $bashir_rased_language_skill['bashir-rased-language-skill-value-3'];

$bashir_rased_language_skill_value_4 = $bashir_rased_language_skill['bashir-rased-language-skill-value-4'];

$bashir_rased_language_skill_value_5 = $bashir_rased_language_skill['bashir-rased-language-skill-value-5'];
?>

<div class="col-lg-3">

    <?php if(isset($bashir_rased_language_skill_text) && !empty($bashir_rased_language_skill_text)): ?>
    <div class="bashir-rased-skills-bar-title-area">
        <h5>
            <?php
			printf(
				/* translators: %s: Name of language skill bar text */
				'%s',
				esc_html($bashir_rased_language_skill_text,'bashir-rased')
			);
			?>
        </h5>
    </div>
    <?php endif; ?>

    <?php if(isset($bashir_rased_language_skill_value_1) && !empty($bashir_rased_language_skill_value_1) && isset($bashir_rased_language_skill_value_2) && !empty($bashir_rased_language_skill_value_2) && isset($bashir_rased_language_skill_value_3) && !empty($bashir_rased_language_skill_value_3) && isset($bashir_rased_language_skill_value_4) && !empty($bashir_rased_language_skill_value_4) && isset($bashir_rased_language_skill_value_5) && !empty($bashir_rased_language_skill_value_5)): ?>
    <div class="bashir-rased-skills-bar-icons-area">
        <i class="
        <?php
        echo esc_attr($bashir_rased_language_skill_value_1);
		?>
        "></i>
        
        <i class="
        <?php
        echo esc_attr($bashir_rased_language_skill_value_2);
		?>
        "></i>

        <i class="
        <?php
        echo esc_attr($bashir_rased_language_skill_value_3);
		?>
        "></i>

        <i class="
        <?php
        echo esc_attr($bashir_rased_language_skill_value_4);
		?>
        "></i>

        <i class="
        <?php
        echo esc_attr($bashir_rased_language_skill_value_5);
		?>
        "></i>
    </div>
    <?php endif; ?>

</div>

<?php 
endforeach;

else: get_template_part('homepage-sections/skill/skill-language-item','else');

endif;

else: get_template_part('homepage-sections/skill/skill-language-item','else');

endif;

?>