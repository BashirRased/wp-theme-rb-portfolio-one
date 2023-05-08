<?php
/**
 * The template for displaying frontpage My Skills Section
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
    $bashir_rased_skill_header_title_theme_color = $bashir_rased_data['bashir-rased-skill-header-title-theme-color'];

    $bashir_rased_skill_header_title_black = $bashir_rased_data['bashir-rased-skill-header-title-black'];
    
    $bashir_rased_design_skills_title = $bashir_rased_data['bashir-rased-design-skills-title'];
    
    $bashir_rased_design_skills = $bashir_rased_data['bashir-rased-design-skill-item'];
    
    $bashir_rased_development_skills_title = $bashir_rased_data['bashir-rased-development-skills-title'];
    
    $bashir_rased_development_skills = $bashir_rased_data['bashir-rased-development-skill-item'];
    
    $bashir_rased_language_skills_title = $bashir_rased_data['bashir-rased-language-skills-title'];
    
    $bashir_rased_language_skills = $bashir_rased_data['bashir-rased-language-skill-item'];
}

if ( empty($bashir_rased_skill_header_title_theme_color) && empty($bashir_rased_skill_header_title_black) && empty($bashir_rased_design_skills_title) && empty($bashir_rased_design_skills ) && empty($bashir_rased_development_skills_title) && empty($bashir_rased_development_skills) && empty($bashir_rased_language_skills_title) && empty($bashir_rased_language_skills) ) :

else:

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

<?php endif; ?>