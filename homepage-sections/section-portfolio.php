<?php
/**
 * The template for displaying frontpage Portfolio Section
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.5
 */

?>

<!--======================================= 
===== My Portfolio Section Strat Here =====
========================================-->
<section id="bashir-rased-my-portfolio" class="bashir-rased-scroll-menu">

    <!--===== My Portfolio Section Title Strat Here =====-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bashir-rased-section-title">
                    <h2>
                        <?php get_template_part('homepage-sections/portfolio/portfolio','head'); ?>
                    </h2>
                </div>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
    <!--===== My Portfolio Section Title End Here =====-->
    
    <!--===== My Portfolio Button Area Start Here =====-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bashir-rased-portfolio-btn-area">
                    <nav>
                        <ul>
                            <?php get_template_part('homepage-sections/portfolio/portfolio','menu'); ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
    <!--===== My Portfolio Button Area End Here =====-->
            
    <!--===== My Portfolio Content Area Start Here =====-->
    <div class="container">
        <div class="row bashir-rased-portfolio">                    
            <?php get_template_part('homepage-sections/portfolio/portfolio','item'); ?>
        </div><!-- row end -->
    </div><!-- container end -->
    <!--===== My Portfolio Content Area Start Here =====-->
    
</section>
<!--===================================== 
===== My Portfolio Section End Here =====
======================================-->