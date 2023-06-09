<?php
/**
 * The template for displaying website breadcrumbs
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.7
 * @since RB Portfolio One 1.1.7
 */
?>
<!--========================================== 
===== Header Breadcrumbs Area Strat Here =====
===========================================-->
<section class="header-breadcrumbs-area" style="background-image: url(<?php header_image(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="header-breadcrumbs">

                    <?php do_action ( 'rb_portfolio_one_breadcrumbs' ); ?>

                </div><!-- .header-breadcrumbs -->

            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .header-breadcrumbs-area -->
<!--======================================== 
===== Header Breadcrumbs Area End Here =====
=========================================-->