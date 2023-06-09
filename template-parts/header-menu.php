<?php
/**
 * The template for displaying website header menu
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.9
 * @since RB Portfolio One 1.1.9
 */

?>

<!--===== Header Menu Area Strat Here =====-->
<div class="header-menu-area <?php do_action ( 'rb_portfolio_one_theme_option_header_transparent' );
do_action ( 'rb_portfolio_one_theme_option_header_fixed' ); ?>" id="<?php do_action ( 'rb_portfolio_one_theme_option_header_fixed' ); ?>">
    <div class="container">
        <div class="row">
        
            <!-- Header Logo Area Strat Here -->
            <div class="col-lg-3">                
                <div class="header-logo">
                    <h1 class="text-md-center">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </h1>
                </div>
            </div>
            <!-- Header Logo Area End Here -->
                
            <!-- Header Menu Area Strat Here -->
            <div class="col-lg-9">
                <div class="header-menu">
                    <?php
                        wp_nav_menu( array(
                            'container' => 'nav',
                            'theme_location' => 'header_menu',
                        )); 
                    ?>
                </div>
            </div>
            <!-- Header Menu Area End Here -->
            
        </div><!-- .row -->
    </div><!-- .container -->
</div>
<!--===== Header Menu Area End Here =====-->