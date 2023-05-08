<?php
/**
 * The template for displaying frontpage resume section
 *
 * Part of resume section work experiance subsection item
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */
 
$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
    $bashir_rased_work_experiances = $bashir_rased_data['bashir-rased-work-experiance-item'];
}
    
if (!empty($bashir_rased_work_experiances)) :

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
            ?>
        </p>
    </div>
</div>
<!-- 01. My Resume Work Experience Single Item End Here -->

<?php
    endforeach;

endif;
    