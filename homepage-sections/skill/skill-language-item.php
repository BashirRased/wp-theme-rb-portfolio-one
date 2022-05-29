<?php
/**
 * The template for displaying frontpage skill section
 *
 * Part of skill section language subsection item
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.5
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

$bashir_rased_language_skills = $bashir_rased_data['bashir-rased-language-skill-item'] ? $bashir_rased_data['bashir-rased-language-skill-item'] : ""; 

if (isset($bashir_rased_language_skills) && !empty($bashir_rased_language_skills)) :

foreach ($bashir_rased_language_skills as $bashir_rased_language_skill) :
?>

<div class="col-lg-3">
    <div class="bashir-rased-skills-bar-title-area">
        <h5>
            <?php
			printf(
				/* translators: %s: Name of language skill bar text */
				__('%s','bashir-rased'),
				$bashir_rased_language_skill['bashir-rased-language-skill-text']
			);
			?>
        </h5>
    </div>
    <div class="bashir-rased-skills-bar-icons-area">
        <i class="
        <?php
        echo esc_attr(wp_kses_post($bashir_rased_language_skill['bashir-rased-language-skill-value-1']));
		?>
        "></i>
        
        <i class="
        <?php
        echo esc_attr(wp_kses_post($bashir_rased_language_skill['bashir-rased-language-skill-value-2']));
		?>
        "></i>

        <i class="
        <?php
        echo esc_attr(wp_kses_post($bashir_rased_language_skill['bashir-rased-language-skill-value-3']));
		?>
        "></i>

        <i class="
        <?php
        echo esc_attr(wp_kses_post($bashir_rased_language_skill['bashir-rased-language-skill-value-4']));
		?>
        "></i>

        <i class="
        <?php
        echo esc_attr(wp_kses_post($bashir_rased_language_skill['bashir-rased-language-skill-value-5']));
		?>
        "></i>
    </div>								
</div>

<?php 
endforeach;

else: get_template_part('homepage-sections/skill/skill-language-item','else');

endif;

?>