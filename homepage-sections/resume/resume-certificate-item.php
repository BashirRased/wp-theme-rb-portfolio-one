<?php
/**
 * The template for displaying frontpage resume section
 *
 * Part of resume section certificate subsection item else
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.5
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

$bashir_rased_certifications = $bashir_rased_data['bashir-rased-certification-item'] ? $bashir_rased_data['bashir-rased-certification-item'] : "";
    
if (isset($bashir_rased_certifications) && !empty($bashir_rased_certifications)) :

foreach ($bashir_rased_certifications as $bashir_rased_certification) :
?>

<div class="bashir-rased-resume-single-item">
    <div class="bashir-rased-resume-single-item-title">
        <h5>
            <?php
            if(isset($bashir_rased_certification['bashir-rased-certification-title']) && !empty($bashir_rased_certification['bashir-rased-certification-title'])){
                printf(
				/* translators: %s: Name of certificate title */
				__('%s','bashir-rased'),
				$bashir_rased_certification['bashir-rased-certification-title']
				);
            }
            else{
                esc_html_e('Add Certificate Name','bashir-rased');
            }
            ?>
        </h5>
    </div>
    <div class="bashir-rased-resume-single-item-details">
        <?php
        if(isset($bashir_rased_certification['bashir-rased-certification-by']) && !empty($bashir_rased_certification['bashir-rased-certification-by'])){
            printf(
			/* translators: %s: Name of certificate by */
			__('%s','bashir-rased'),
			$bashir_rased_certification['bashir-rased-certification-by']
			);
        }        
        else{
            esc_html_e('Add Certificate From','bashir-rased');
        }
        ?>
    </div>
    <div class="bashir-rased-resume-single-item-description">
        <p>
            <?php
            if(isset($bashir_rased_certification['bashir-rased-certification-desc']) && !empty($bashir_rased_certification['bashir-rased-certification-desc'])){
                printf(
				/* translators: %s: Name of certificate description */
				__('%s','bashir-rased'),
				$bashir_rased_certification['bashir-rased-certification-desc']
				);
            }
            else{
                esc_html_e('Add Certificate Description','bashir-rased');
            }
            ?>
        </p>
    </div>
</div>

<?php
    endforeach;
    else : 
?>

<?php get_template_part('homepage-sections/resume/resume-certificate-item','else'); ?>

<?php endif; ?>