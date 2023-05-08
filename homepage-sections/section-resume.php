<?php
/**
 * The template for displaying frontpage Resume Section
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
    $bashir_rased_resume_header_title_theme_color = $bashir_rased_data['bashir-rased-resume-header-title-theme-color'];

    $bashir_rased_resume_header_title_black = $bashir_rased_data['bashir-rased-resume-header-title-black'];
    
    $bashir_rased_work_experiance_title = $bashir_rased_data['bashir-rased-work-experiance-title'];
    
    $bashir_rased_work_experiances = $bashir_rased_data['bashir-rased-work-experiance-item'];
    
    $bashir_rased_certification_title = $bashir_rased_data['bashir-rased-certification-title'];
    
    $bashir_rased_certifications = $bashir_rased_data['bashir-rased-certification-item'];
}

if ( empty($bashir_rased_resume_header_title_theme_color) && empty($bashir_rased_resume_header_title_black) && empty($bashir_rased_work_experiance_title) && empty($bashir_rased_work_experiances) && empty($bashir_rased_certification_title) && empty($bashir_rased_certifications) ) :

else:

?>

<!--==================================== 
===== My Resume Section Strat Here =====
=====================================-->
<section id="bashir-rased-my-resume" class="bashir-rased-scroll-menu">

    <?php if ( !empty($bashir_rased_resume_header_title_theme_color) || !empty($bashir_rased_resume_header_title_black) ) : ?>
    <!--===== My Resume Section Title Strat Here =====-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bashir-rased-section-title">
                    <h2>
                        <?php get_template_part('homepage-sections/resume/resume','head'); ?>
                    </h2>
                </div>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
    <!--===== My Resume Section Title End Here =====-->
    <?php endif; ?>
    
    <?php if ( !empty($bashir_rased_work_experiance_title) || !empty($bashir_rased_work_experiances ) || !empty($bashir_rased_certification_title) || !empty($bashir_rased_certifications) ) : ?>
    <!--===== My Resume Area Start Here =====-->
    <div class="container">
        <div class="row">
        
            <?php if ( !empty($bashir_rased_work_experiance_title) || !empty($bashir_rased_work_experiances) ) :
                
                if (empty($bashir_rased_certification_title) && empty($bashir_rased_certifications)) {
                    $col_class = 'col-lg-12';
                } else {
                    $col_class = 'col-lg-6';
                }

            ?>
            <!-- My Resume Work Experience Area Start Here -->
            <div class="<?php echo esc_attr($col_class); ?>">
                <div class="bashir-rased-resume-work-area">

                    <?php if ( !empty($bashir_rased_work_experiance_title) ) : ?>
                    <div class="bashir-rased-resume-sub-title">
                        <h3>
                            <?php get_template_part('homepage-sections/resume/resume-work-experiance','title'); ?>
                        </h3>
                    </div>
                    <?php endif; ?>

                    <?php get_template_part('homepage-sections/resume/resume-work-experiance','item'); ?>
                    
                </div>
            </div>
            <!-- My Resume Work Experience Area End Here -->
            <?php endif; ?>
            
            <?php if ( !empty($bashir_rased_certification_title) || !empty($bashir_rased_certifications) ) :

                if (empty($bashir_rased_work_experiance_title) && empty($bashir_rased_work_experiances)) {
                    $col_class = 'col-lg-12';
                } else {
                    $col_class = 'col-lg-6';
                }
                
            ?>
            <!-- My Resume Certification Area Start Here -->
            <div class="<?php echo esc_attr($col_class); ?>">
                <div class="bashir-rased-resume-certification-area">

                    <?php if ( !empty($bashir_rased_certification_title) ) : ?>
                    <div class="bashir-rased-resume-sub-title">
                        <h3>
                            <?php get_template_part('homepage-sections/resume/resume-certificate','title'); ?>
                        </h3>
                    </div>
                    <?php endif; ?>

                    <?php get_template_part('homepage-sections/resume/resume-certificate','item'); ?>
                    
                </div>
            </div>
            <!-- My Resume Certification Area End Here -->
            <?php endif; ?>
            
        </div><!-- row end -->
    </div><!-- container end -->
    <!--===== My Resume Area End Here =====-->
    <?php endif; ?>
    
</section>
<!--================================== 
===== My Resume Section End Here =====
===================================-->

<?php endif; ?>