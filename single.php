<?php
/**
 * The template for displaying single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.1
 */

get_header();
get_template_part('template-parts/header-menu');
get_template_part('template-parts/preloader');
?>

<div id="bashir-rased-content">
    <div class="container">
        <div class="row">

            <?php get_template_part('template-parts/blog-content','single'); ?>

            <?php
                if (is_active_sidebar('bashir-rased-sidebar-right')){
                    get_sidebar();
                }
            ?>

        </div><!-- row end -->
    </div><!-- container end -->
</div>

<?php get_footer(); ?>