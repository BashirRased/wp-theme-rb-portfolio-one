<?php
/**
 * The template for displaying frontpage My Skills Section
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.4
 */

?>

<!--==================================== 
===== My Skills Section Strat Here =====
=====================================-->
<section id="bashir-rased-my-skills" class="bashir-rased-scroll-menu">

    <!--===== My Skills Section Title Strat Here =====-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bashir-rased-section-title">
                    <h2>
                        <?php get_template_part('homepage-sections/skill/skill','head'); ?>
                    </h2>
                </div>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
    <!--===== My Skills Section Title End Here =====-->
    
    <!--===== My Skills Area Start Here =====-->
    <div class="container">
        <div class="row">
        
            <!-- My Design Skills Area Start Here -->
            <div class="col-lg-6">
                <div class="bashir-rased-design-skills">
                    <div class="bashir-rased-skills-bar-area">
                        
                        <!-- My Skills Sub-title Area Start Here -->
                        <div class="bashir-rased-skills-title">
                            <h3>
                                <?php get_template_part('homepage-sections/skill/skill-design','title'); ?>
                            </h3>
                        </div>
                        <!-- My Skills Sub-title Area End Here -->
                        
                        <?php get_template_part('homepage-sections/skill/skill-design','item'); ?>
                        
                    </div>
                </div>
            </div>
            <!-- My Design Skills Area End Here -->
            
            <!-- My Development Skills Area Start Here -->
            <div class="col-lg-6">
                <div class="bashir-rased-development-skills">
                    <div class="bashir-rased-skills-bar-area">
                    
                        <!-- My Skills Sub-title Area Start Here -->
                        <div class="bashir-rased-skills-title">
                            <h3>
                                <?php get_template_part('homepage-sections/skill/skill-development','title'); ?>
                            </h3>
                        </div>
                        <!-- My Skills Sub-title Area End Here -->
                            
                        <?php get_template_part('homepage-sections/skill/skill-development','item'); ?>
                        
                    </div>
                </div>
            </div>
            <!-- My Development Skills Area End Here -->
            
            <!-- My Language Skills Area Start Here -->
            <div class="col-lg-12">
                <div class="bashir-rased-language-skills">
                    <div class="bashir-rased-skills-bar-area">
                    
                        <!-- My Skills Sub-title Area Start Here -->
                        <div class="bashir-rased-skills-title">
                            <h3>
                                <?php get_template_part('homepage-sections/skill/skill-language','title'); ?>
                            </h3>
                        </div>
                        <!-- My Skills Sub-title Area End Here -->
                        
                        <div class="row">
                            
                            <?php get_template_part('homepage-sections/skill/skill-language','item'); ?>
                        
                        </div><!-- row end -->
                    </div>
                </div>
            </div>
            <!-- My Language Skills Area Start Here -->
            
        </div><!-- row end -->
    </div><!-- container end -->
    <!--===== My Skills Area End Here =====-->
    
</section>
<!--================================== 
===== My Skills Section End Here =====
===================================-->