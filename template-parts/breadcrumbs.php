<?php
/**
 * The template for displaying website breadcrumbs
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

?>
<!--========================================== 
===== Header Breadcrumbs Area Strat Here =====
===========================================-->
<div class="header-breadcrumbs-area" style="background-image: url(<?php header_image(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <section class="header-breadcrumbs">

                    <?php do_action ( 'bashir_rased_breadcrumbs' ); ?>

                </section><!-- .header-breadcrumbs -->

            </div>
        </div><!-- row end -->
    </div><!-- container end -->
</div><!-- .header-breadcrumbs-area -->
<!--======================================== 
===== Header Breadcrumbs Area End Here =====
=========================================-->