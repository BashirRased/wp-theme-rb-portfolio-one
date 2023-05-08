<?php
/**
 * The template for displaying frontpage Subscribe Section
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
    $bashir_rased_subscribe_header_title = $bashir_rased_data['bashir-rased-subscribe-header-title'];
}

if ( empty($bashir_rased_subscribe_header_title) ) :

else:

?>

<!--======================================= 
===== Subscribe Me Section Strat Here =====
========================================-->
<section id="bashir-rased-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bashir-rased-subscribe-area">
                    <div class="bashir-rased-subscribe-title">
                        <h2>
                            <?php get_template_part('homepage-sections/subscribe/subscribe','head'); ?>
                        </h2>
                    </div>
                    <div class="bashir-rased-subscribe-form">
                        <?php get_template_part('homepage-sections/subscribe/subscribe','form'); ?>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
</section>
<!--===================================== 
===== Subscribe Me Section End Here =====
======================================-->

<?php endif; ?>