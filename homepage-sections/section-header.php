<?php
/**
 * The template for displaying frontpage Header Section
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.4
 */

?>

<!--============================== 
===== Header Area Strat Here =====
===============================-->
<header id="bashir-rased-page-content" class="bashir-rased-scroll-menu bashir-rased-header-area">
    <div class="bashir-rased-header container">
        <div class="row">
            
            <!-- Header Content Left Area Start Here -->
            <div class="col-lg-6 col-12">
                <div class="bashir-rased-content-area-left">
                        
                    <!-- Header Header Title Area Start Here -->
                    <div class="bashir-rased-header-title">
                        <h4>
                            <?php get_template_part('homepage-sections/header/header-subtitle','first'); ?>
                        <span class="bashir-rased-theme-color">
                            <?php get_template_part('homepage-sections/header/header-subtitle','name'); ?>
                        </span>
                            <?php get_template_part('homepage-sections/header/header-subtitle','last'); ?>
                        </h4>
                    </div>
                    <!-- Header Header Title Area End Here -->
                                        
                    <!-- Header Header Type Effcet Area Start Here -->
                    <div class="bashir-rased-header-type-effect">
                        <h1>
                            <?php
                            get_template_part('homepage-sections/header/header-title','first');
                            get_template_part('homepage-sections/header/header-title','last');
                            ?>
                        </h1>
                    </div>
                    <!-- Header Header Type Effcet Area End Here -->
                    
                    <!-- Header Header Social Icons Area Start Here -->
                    <div class="bashir-rased-header-social-icons">
                        <nav>
                            <ul>
                                <?php get_template_part('homepage-sections/header/header-social','links'); ?>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Header Social Icons Area End Here -->
                    
                    <!-- Header Header Button Area Start Here -->
                    <div class="bashir-rased-header-btns-area">
                        <?php get_template_part('homepage-sections/header/header','buttons'); ?>
                    </div>
                    <!-- Header Header Button Area End Here -->
                        
                </div>
            </div>
            <!-- Header Content Left Area End Here -->
            
            <!-- Header Content Right Area Start Here -->
            <div class="col-lg-6">
                <div class="bashir-rased-content-area-right">
                    <?php get_template_part('homepage-sections/header/header-right','img'); ?>
                </div>
            </div>
            <!-- Header Content Right Area End Here -->
            
        </div><!-- row end -->
    </div>
</header>
<!--============================ 
===== Header Area End Here =====
=============================-->