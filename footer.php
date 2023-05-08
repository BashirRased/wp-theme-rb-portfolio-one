<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
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
                        <a href="<?php echo esc_url('https://profiles.wordpress.org/bashirrased2017/'); ?>">
                            <?php esc_html_e('Bashir Rased','bashir-rased'); ?>
                        </a>
                        <?php esc_html_e(' 2022 | All Rights Reserved.','bashir-rased'); ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bashir-rased-footer-text-right float-end">
                    <p>
                        <?php esc_html_e('Powered By ','bashir-rased'); ?>
                        <a href="<?php echo esc_url('https://profiles.wordpress.org/bashirrased2017/'); ?>">
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
<button class="bashir-rased-scroll-to-top-area">
    <i class="fa-solid fa-angles-up"></i>
</button>
<!--=================================== 
===== Scroll to Top Area End Here =====
====================================-->

<?php wp_footer(); ?>
</body>

</html>