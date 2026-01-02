<?php
/**
 * The template for displaying website breadcrumbs
 *
 * @package RB_Themes
 */
?>
<!--========================================== 
===== Header Breadcrumbs Area Strat Here =====
===========================================-->
<section class="header-breadcrumbs-wrap" style="background-image: url(<?php header_image(); ?>);">
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