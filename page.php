<?php
/**
 * The template for displaying all single pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

get_header();
get_template_part('template-parts/preloader');
get_template_part('template-parts/header-top');
get_template_part('template-parts/header-menu');
get_template_part('template-parts/breadcrumbs');
?>

<div id="bashir-rased-page-content" class="bashir-rased-blog-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php get_template_part('template-parts/blog-content','single'); ?>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
</div>

<?php get_footer(); ?>