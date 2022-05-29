<?php
/**
 * The template for displaying frontpage resume section
 *
 * Part of resume section work experiance subsection item
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.0
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

$bashir_rased_work_experiances = $bashir_rased_data['bashir-rased-work-experiance-item'];
    
if ($bashir_rased_work_experiances) :

foreach ($bashir_rased_work_experiances as $bashir_rased_work_experiance) :
?>

<!-- 01. My Resume Work Experience Single Item Start Here -->
<div class="bashir-rased-resume-single-item">
    <div class="bashir-rased-resume-single-item-title">
        <h5>
            <?php
            if(isset($bashir_rased_work_experiance['bashir-rased-work-experiance-title']) && !empty($bashir_rased_work_experiance['bashir-rased-work-experiance-title'])){
               printf(
				/* translators: %s: Name of work experiance title */
				__('%s','bashir-rased'),
				$bashir_rased_work_experiance['bashir-rased-work-experiance-title']
				);
            }
            else{
                esc_html_e('Add Company Name','bashir-rased');
            }
            ?>
        </h5>
    </div>
    <div class="bashir-rased-resume-single-item-details">
        <?php
        if(isset($bashir_rased_work_experiance['bashir-rased-work-experiance-duration']) && !empty($bashir_rased_work_experiance['bashir-rased-work-experiance-duration'])){
            printf(
			/* translators: %s: Name of work experiance duration */
			__('%s','bashir-rased'),
			$bashir_rased_work_experiance['bashir-rased-work-experiance-duration']
			);
        }
        else{
            esc_html_e('Add Work Duration','bashir-rased');
        }
        ?>
    </div>
    <div class="bashir-rased-resume-single-item-description">
        <p>
            <?php
            if(isset($bashir_rased_work_experiance['bashir-rased-work-experiance-desc']) && !empty($bashir_rased_work_experiance['bashir-rased-work-experiance-desc'])){
                printf(
				/* translators: %s: Name of work experiance description */
				__('%s','bashir-rased'),
				$bashir_rased_work_experiance['bashir-rased-work-experiance-desc']
				);
            }
            else{
                esc_html_e('Add Work Description','bashir-rased');
            }
            ?>
        </p>
    </div>
</div>
<!-- 01. My Resume Work Experience Single Item End Here -->

<?php
    endforeach;
    else : 
?>

<?php get_template_part('homepage-sections/resume/resume-work-experiance-item','else'); ?>

<?php endif; ?>