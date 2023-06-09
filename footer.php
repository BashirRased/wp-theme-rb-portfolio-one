<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.9
 * @since RB Portfolio One 1.1.9
 */

?>

<!--============================== 
===== Footer Area Strat Here =====
===============================-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="copyright-text">
                    <p>
                        <?php $rb_portfolio_one_copyright_text = get_theme_mod( 'rb_portfolio_one_copyright_text' );
                        echo wp_kses_post( $rb_portfolio_one_copyright_text ); ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="powerby-text float-end">
                    <p>
                    <?php $rb_portfolio_one_powerby_text = get_theme_mod( 'rb_portfolio_one_poweredby_text' );
                    echo wp_kses_post( $rb_portfolio_one_powerby_text );
                    ?>
                    </p>
                </div>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</footer>
<!--============================ 
===== Footer Area End Here =====
=============================-->

<?php 
    do_action( 'rb_portfolio_one_theme_option_scroll_to_top' );
    wp_footer();
?>
</body>

</html>