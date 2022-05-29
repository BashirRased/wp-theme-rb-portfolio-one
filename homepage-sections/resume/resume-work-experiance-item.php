<?php
/**
 * The template for displaying frontpage resume section
 *
 * Part of resume section work experiance subsection item
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.2
 */
 
global $bashir_rased_data;

if ($bashir_rased_data):

$bashir_rased_work_experiances = $bashir_rased_data['bashir-rased-work-experiance-item'];
    
if (isset($bashir_rased_work_experiances) && !empty($bashir_rased_work_experiances)) :

foreach ($bashir_rased_work_experiances as $bashir_rased_work_experiance) :

$bashir_rased_work_experiance_title = $bashir_rased_work_experiance['bashir-rased-work-experiance-title'];

$bashir_rased_work_experiance_duration = $bashir_rased_work_experiance['bashir-rased-work-experiance-duration'];

$bashir_rased_work_experiance_desc = $bashir_rased_work_experiance['bashir-rased-work-experiance-desc'];
?>

<!-- 01. My Resume Work Experience Single Item Start Here -->
<div class="bashir-rased-resume-single-item">
    <div class="bashir-rased-resume-single-item-title">
        <h5>
            <?php
            if(isset($bashir_rased_work_experiance_title) && !empty($bashir_rased_work_experiance_title)){
               printf(
				/* translators: %s: Name of work experiance title */
				'%s',
				esc_html($bashir_rased_work_experiance_title,'bashir-rased')
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
        if(isset($bashir_rased_work_experiance_duration) && !empty($bashir_rased_work_experiance_duration)){
            printf(
			/* translators: %s: Name of work experiance duration */
			'%s',
			esc_html($bashir_rased_work_experiance_duration,'bashir-rased')
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
            if(isset($bashir_rased_work_experiance_desc) && !empty($bashir_rased_work_experiance_desc)){
                printf(
				/* translators: %s: Name of work experiance description */
				'%s',
				esc_html($bashir_rased_work_experiance_desc,'bashir-rased')
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
get_template_part('homepage-sections/resume/resume-work-experiance-item','else');

endif;

else :
    get_template_part('homepage-sections/resume/resume-work-experiance-item','else');
    
endif;
    