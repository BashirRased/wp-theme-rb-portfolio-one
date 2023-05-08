<?php
/**
 * The template for displaying frontpage About Me Section
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
    
    $bashir_rased_about_header_title_black = $bashir_rased_data['bashir-rased-about-header-title-black'];

    $bashir_rased_about_header_title_theme_color = $bashir_rased_data['bashir-rased-about-header-title-theme-color'];
    
    $bashir_rased_about_img_url = $bashir_rased_data['bashir-rased-about-img'];
    
    $bashir_rased_about_me_btns = $bashir_rased_data['bashir-rased-about-btns'];
    
    $bashir_rased_about_desc = $bashir_rased_data['bashir-rased-about-desc']; 
    
    $bashir_rased_about_infos = $bashir_rased_data['bashir-rased-about-info'];
}

if ( empty($bashir_rased_about_header_title_black) && empty($bashir_rased_about_header_title_theme_color) && empty($bashir_rased_about_img_url['url']) && empty($bashir_rased_about_me_btns) && empty($bashir_rased_about_desc) && empty($bashir_rased_about_infos) ):

else:
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

                <?php
                get_template_part('homepage-sections/about-me/about-left','img');
                get_template_part('homepage-sections/about-me/about','buttons');
                ?>
                
            </div>
            <!--===== About Me Left Area End Here =====-->
            
            <!--===== About Me Right Area Strat Here =====-->
            <div class="col-lg-7">

                <?php get_template_part('homepage-sections/about-me/about','desc'); ?>

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

<?php endif; ?>