<?php
/**
 * The template for displaying frontpage Contact Section
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.6
 */

?>

<!--===================================== 
===== Contact Me Section Strat Here =====
======================================-->
<section id="bashir-rased-contact-me" class="bashir-rased-scroll-menu">
    
    <!--===== Contact Me Section Title Strat Here =====-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bashir-rased-section-title">
                    <h2>
                        <?php get_template_part('homepage-sections/contact/contact','head'); ?>
                    </h2>
                </div>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
    <!--===== Contact Me Section Title End Here =====-->
    
    <!--===== Contact Me Section Content Area Strat Here =====-->
    <div class="container">
        <div class="row">
            
            <!-- Contact Massage Area Start Here -->
            <div class="col-lg-8">
                
                <!-- Contact Me Sub-title Start Here -->
                <div class="bashir-rased-contact-me-sub-title">
                    <h3>
                        <?php get_template_part('homepage-sections/contact/contact-massage','title'); ?>
                    </h3>
                </div>
                <!-- Contact Me Sub-title End Here -->
                
                <?php get_template_part('homepage-sections/contact/contact','form'); ?>
                
            </div>
            <!-- Contact Massage Area End Here -->
            
            <!-- Contact Get In Touch Area Start Here -->
            <div class="col-lg-4">
            
                <!-- Contact Me Sub-title Start Here -->
                <div class="bashir-rased-contact-me-sub-title">
                    <h3>
                        <?php get_template_part('homepage-sections/contact/contact','get-in-touch'); ?>
                    </h3>
                </div>
                <!-- Contact Me Sub-title End Here -->
                
                <!-- Contact Me Info Area Start Here -->
                <div class="bashir-rased-contact-info-area">
                    
                    <!-- Contact Me Info Address Area Start Here -->
                    <div class="bashir-rased-contact-info-highlight">
                        <h5>
                            <?php esc_html_e('address:','bashir-rased');?>
                        </h5>
                    </div>
                    <div class="bashir-rased-contact-info-text">
                        <p>
                            <?php get_template_part('homepage-sections/contact/contact','address'); ?>
                        </p>
                    </div>
                    <!-- Contact Me Info Address Area End Here -->
                        
                    <!-- Contact Me Info Phone Area Start Here -->
                    <div class="bashir-rased-contact-info-highlight">
                        <h5>
                            <?php esc_html_e('phone:','bashir-rased');?>
                        </h5>
                    </div>
                    <div class="bashir-rased-contact-info-text">
                        <p>
                            <?php get_template_part('homepage-sections/contact/contact','phone'); ?>
                        </p>
                    </div>
                    <!-- Contact Me Info Phone Area End Here -->
                        
                    <!-- Contact Me Info E-mail Area Start Here -->
                    <div class="bashir-rased-contact-info-highlight">
                        <h5>
                            <?php esc_html_e('e-mail:','bashir-rased');?>
                        </h5>
                    </div>
                    <div class="bashir-rased-contact-info-text">
                        <p>
                            <?php get_template_part('homepage-sections/contact/contact','email'); ?>
                        </p>
                    </div>
                    <!-- Contact Me Info E-mail Area End Here -->
                    
                    <!-- Contact Me Info Social Icons Area Start Here -->
                    <div class="bashir-rased-contact-info-highlight">
                        <h5>
                            <?php esc_html_e('social links:','bashir-rased');?>
                        </h5>
                    </div>
                    <div class="bashir-rased-contact-info-social-icons">
                        <nav>
                            <ul>
                                <?php get_template_part('homepage-sections/contact/contact-social','links'); ?>                               
                            </ul>
                        </nav>
                    </div>
                    <!-- Contact Me Info Social Icons Area End Here -->
                    
                </div>
                <!-- Contact Me Info Area End Here -->
                
            </div>
            <!-- Contact Get In Touch Area Start Here -->
            
        </div><!-- row end -->
    </div><!-- container end -->
    <!--===== Contact Me Section Content Area End Here =====-->
    
</section>
<!--=================================== 
===== Contact Me Section End Here =====
====================================-->