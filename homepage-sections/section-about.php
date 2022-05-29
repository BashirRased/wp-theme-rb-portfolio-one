<?php
/**
 * The template for displaying frontpage About Me Section
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.6
 */

?>

<!--=================================== 
===== About Me Section Strat Here =====
====================================-->
<section id="bashir-rased-about-me" class="bashir-rased-scroll-menu">
    
    <!--===== About Me Section Title Strat Here =====-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bashir-rased-section-title">
                    <h2>
                        <?php get_template_part('homepage-sections/about-me/about','head'); ?>
                    </h2>
                </div>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
    <!--===== About Me Section Title End Here =====-->
    
    <!--===== About Me Area Strat Here =====-->
    <div class="container">
        <div class="row">
            
            <!--===== About Me Left Area Strat Here =====-->
            <div class="col-lg-5">
                
                <!-- About Me Image Area Start Here -->
                <div class="bashir-rased-about-me-section-img">
                    <?php get_template_part('homepage-sections/about-me/about-left','img'); ?>
                </div>
                <!-- About Me Image Area End Here -->
                
                <!-- About Me Button Area Start Here -->
                <div class="bashir-rased-about-me-btns">
                    <?php get_template_part('homepage-sections/about-me/about','buttons'); ?>
                </div>
                <!-- About Me Button Area End Here -->
                
            </div>
            <!--===== About Me Left Area End Here =====-->
            
            <!--===== About Me Right Area Strat Here =====-->
            <div class="col-lg-7">
                
                <!-- About Me Content Area Start Here -->
                <div class="bashir-rased-about-me-content">
                    <?php get_template_part('homepage-sections/about-me/about','desc'); ?>
                </div>
                <!-- About Me Content Area End Here -->

                <!-- About Me Separator Area Start Here -->
                <div class="bashir-rased-about-me-separator"></div>
                <!-- About Me Separator Area Start Here -->
                
                <!-- About Me Information Area Start Here -->
                <div class="bashir-rased-about-me-information">
                    <ul>
                        <?php get_template_part('homepage-sections/about-me/about','info'); ?>
                    </ul>
                </div>
                <!-- About Me Information Area End Here -->
                
            </div>
            <!--===== About Me Right Area End Here =====-->
            
        </div><!-- row end -->
    </div><!-- container end -->
    <!--===== About Me Area End Here =====-->
    
</section>
<!--================================= 
===== About Me Section End Here =====
==================================-->