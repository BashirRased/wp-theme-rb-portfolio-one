<?php
/**
 * The template for displaying frontpage resume section
 *
 * Part of resume section certificate subsection item else
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.2
 */
 
global $bashir_rased_data;

if ($bashir_rased_data) :

$bashir_rased_certifications = $bashir_rased_data['bashir-rased-certification-item'];
    
if (isset($bashir_rased_certifications) && !empty($bashir_rased_certifications)) :

foreach ($bashir_rased_certifications as $bashir_rased_certification) :

$bashir_rased_certification_title = $bashir_rased_certification['bashir-rased-certification-title'];

$bashir_rased_certification_by = $bashir_rased_certification['bashir-rased-certification-by'];

$bashir_rased_certification_desc = $bashir_rased_certification['bashir-rased-certification-desc'];

?>

<div class="bashir-rased-resume-single-item">
    <div class="bashir-rased-resume-single-item-title">
        <h5>
            <?php
            if(isset($bashir_rased_certification_title) && !empty($bashir_rased_certification_title)){
                printf(
				/* translators: %s: Name of certificate title */
				'%s',
				esc_html($bashir_rased_certification_title,'bashir-rased')
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
        if(isset($bashir_rased_certification_by) && !empty($bashir_rased_certification_by)){
            printf(
			/* translators: %s: Name of certificate by */
			'%s',
			esc_html($bashir_rased_certification_by,'bashir-rased')
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
            if(isset($bashir_rased_certification_desc) && !empty($bashir_rased_certification_desc)){
                printf(
				/* translators: %s: Name of certificate description */
				'%s',
				esc_html($bashir_rased_certification_desc,'bashir-rased')
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
get_template_part('homepage-sections/resume/resume-certificate-item','else'); 

endif;

else : 
    get_template_part('homepage-sections/resume/resume-certificate-item','else'); 
        
endif;