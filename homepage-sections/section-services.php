<?php
/**
 * The template for displaying frontpage My Services Section
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
    $bashir_rased_service_header_title_theme_color = $bashir_rased_data['bashir-rased-service-header-title-theme-color'];

    $bashir_rased_service_header_title_black = $bashir_rased_data['bashir-rased-service-header-title-black'];
    
    $bashir_rased_services = $bashir_rased_data['bashir-rased-service-item'];
}

if ( empty($bashir_rased_service_header_title_theme_color) && empty($bashir_rased_service_header_title_black) && empty($bashir_rased_services) ) :

else:

?>

<!--====================================== 
===== My Services Section Strat Here =====
=======================================-->
<section id="bashir-rased-my-services" class="bashir-rased-scroll-menu">

    <?php if ( !empty($bashir_rased_service_header_title_theme_color) || !empty($bashir_rased_service_header_title_black) ) : ?>
    <!--===== My Services Section Title Strat Here =====-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bashir-rased-section-title">
                    <h2>
                        <?php get_template_part('homepage-sections/service/service','head'); ?>
                    </h2>
                </div>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
    <!--===== My Services Section Title End Here =====-->
    <?php endif; ?>
    
    <!--===== My Services Area Start Here =====-->
    <div class="container">
        <div class="row">
            <?php get_template_part('homepage-sections/service/service','item'); ?>            
        </div><!-- row end -->
    </div><!-- container end -->
    <!--===== My Services Area End Here =====-->
    
</section>
<!--==================================== 
===== My Services Section End Here =====
=====================================-->

<?php endif; ?>