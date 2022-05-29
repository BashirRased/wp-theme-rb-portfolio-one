<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.5
 */

?>

<!--============================== 
===== Footer Area Strat Here =====
===============================-->
<footer id="bashir-rased-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="bashir-rased-footer-text-left">
                    <p>
                        <?php esc_html_e('Copyright © By ','bashir-rased'); ?>
                        <a href="<?php echo esc_url('http://bashir-rased.com/'); ?>">
                            <?php esc_html_e('Bashir Rased','bashir-rased'); ?>
                        </a>
                        <?php esc_html_e(' 2021 | All Rights Reserved.','bashir-rased'); ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bashir-rased-footer-text-right float-end">
                    <p>
                        <?php esc_html_e('Powered By ','bashir-rased'); ?>
                        <a href="<?php echo esc_url('http://bashir-rased.com/'); ?>">
                            <?php esc_html_e('Bashir Rased.','bashir-rased'); ?>
                        </a>
                    </p>
                </div>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
</footer>
<!--============================ 
===== Footer Area End Here =====
=============================-->

<!--===================================== 
===== Scroll to Top Area Strat Here =====
======================================-->
<div class="bashir-rased-scroll-to-top-area">
    <i class="fas fa-angle-up"></i>
</div>
<!--=================================== 
===== Scroll to Top Area End Here =====
====================================-->

<?php wp_footer();?>
</body>

</html>