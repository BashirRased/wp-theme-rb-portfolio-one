<?php
    $bashir_rased_data = get_option('bashir_rased_theme_option');

    if(is_array($bashir_rased_data)) {
        $bashir_rased_work_experiances = $bashir_rased_data['bashir-rased-work-experiance-item'];
    } 

    
    if (isset($bashir_rased_work_experiances) && !empty($bashir_rased_work_experiances)) :
    foreach ($bashir_rased_work_experiances as $bashir_rased_work_experiance) :
?>

<!-- 01. My Resume Work Experience Single Item Start Here -->
<div class="bashir-rased-resume-single-item">
    <div class="bashir-rased-resume-single-item-title">
        <h5>
            <?php
            if(isset($bashir_rased_work_experiance['bashir-rased-work-experiance-title']) && !empty($bashir_rased_work_experiance['bashir-rased-work-experiance-title'])){
                echo wp_kses_post($bashir_rased_work_experiance['bashir-rased-work-experiance-title']);
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
            echo wp_kses_post($bashir_rased_work_experiance['bashir-rased-work-experiance-duration']);
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
                echo wp_kses_post($bashir_rased_work_experiance['bashir-rased-work-experiance-desc']);
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