<?php
/**
 * The template for displaying frontpage Resume Section
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.9
 */

?>

<!--==================================== 
===== My Resume Section Strat Here =====
=====================================-->
<section id="bashir-rased-my-resume" class="bashir-rased-scroll-menu">

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
    
    <!--===== My Resume Area Start Here =====-->
    <div class="container">
        <div class="row">
        
            <!-- My Resume Work Experience Area Start Here -->
            <div class="col-lg-6">
                <div class="bashir-rased-resume-work-area">
                    <div class="bashir-rased-resume-sub-title">
                        <h3>
                            <?php get_template_part('homepage-sections/resume/resume-work-experiance','title'); ?>
                        </h3>
                    </div>

                    <?php get_template_part('homepage-sections/resume/resume-work-experiance','item'); ?>
                    
                </div>
            </div>
            <!-- My Resume Work Experience Area End Here -->
            
            <!-- My Resume Certification Area Start Here -->
            <div class="col-lg-6">
                <div class="bashir-rased-resume-certification-area">
                    <div class="bashir-rased-resume-sub-title">
                        <h3>
                            <?php get_template_part('homepage-sections/resume/resume-certificate','title'); ?>
                        </h3>
                    </div>

                    <?php get_template_part('homepage-sections/resume/resume-certificate','item'); ?>
                    
                </div>
            </div>
            <!-- My Resume Certification Area End Here -->
            
        </div><!-- row end -->
    </div><!-- container end -->
    <!--===== My Resume Area End Here =====-->
    
</section>
<!--================================== 
===== My Resume Section End Here =====
===================================-->