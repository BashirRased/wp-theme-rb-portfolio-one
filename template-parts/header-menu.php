<?php
/**
 * The template for displaying website header menu
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.2
 */

?>

<!--===== Header Menu Area Strat Here =====-->
<div class="bashir-rased-header-menu-area">
    <div class="container">
        <div class="row">
        
            <!-- Header Logo Area Strat Here -->
            <div class="col-lg-12">
                
                <div class="bashir-rased-header-logo">
                    <h1>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <?php bloginfo('name'); ?>
                        </a>
                    </h1>
                </div>

                <!-- Header Mobile Menu Area Strat Here -->
                <div class="bashir-rased-mobile-menu">
                    <button class="bashir-rased-mobile-menu-icons"><i class="fas fa-bars"></i></button>
                </div>
                <!-- Header Mobile Menu Area End Here -->
                
                <!-- Header Desktop Menu Area Strat Here -->
                <div class="bashir-rased-desktop-menu">
                    <?php
                    wp_nav_menu( array(
                        'container' => 'nav',
                        'theme_location' => 'header_menu',
                    )); ?>
                </div>                
                <!-- Header Desktop Menu Area End Here -->

            </div>
            <!-- Header Logo Area End Here -->
            
        </div><!-- row end -->
    </div><!-- container end -->
</div>
<!--===== Header Menu Area End Here =====-->