<?php
/**
 * The template for displaying frontpage Hire Me Section
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
    $bashir_rased_hire_header_title = $bashir_rased_data['bashir-rased-hire-header-title'];

    $bashir_rased_hire_btn_link = $bashir_rased_data['bashir-rased-hire-btn-link'];
}

if ( empty($bashir_rased_hire_header_title) && empty($bashir_rased_hire_btn_link['text']) ) :

else:

?>

<!--================================== 
===== Hire Me Section Strat Here =====
===================================-->
<section id="bashir-rased-hire-me" class="bashir-rased-hire-me">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bashir-rased-hire-me-area">

                    <?php if(!empty($bashir_rased_hire_header_title)): ?>
                    <div class="bashir-rased-hire-me-title">
                        <h2>
                            <?php get_template_part('homepage-sections/hire-me/hire-me','title'); ?>
                        </h2>
                    </div>
                    <?php endif; ?>

                    <?php if(!empty($bashir_rased_hire_btn_link['text'])): ?>
                    <div class="bashir-rased-btn">
                        <?php get_template_part('homepage-sections/hire-me/hire-me','button'); ?>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
</section>
<!--================================ 
===== Hire Me Section End Here =====
=================================-->

<?php endif; ?>