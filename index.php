<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.4
 */

get_header();
get_template_part('template-parts/preloader');
get_template_part('template-parts/header-top');
get_template_part('template-parts/header-menu');
?>

<div id="bashir-rased-content">
    <div class="container">
        <div class="row">            
            <?php
            get_template_part('template-parts/blog-content');

            if (is_active_sidebar('bashir-rased-sidebar-right')){
                get_sidebar();
            }
            ?>
        </div><!-- row end -->
    </div><!-- container end -->
</div>

<?php get_footer(); ?>