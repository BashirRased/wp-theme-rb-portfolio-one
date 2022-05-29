<?php
/**
 * The template for displaying front page
 *
 * @package WordPress
 * @subpackage bashir-rased
 * @since Bashir Rased 1.0.5
 */

get_header();
get_template_part('template-parts/preloader');
get_template_part('template-parts/header-top');
get_template_part('template-parts/header-menu');
get_template_part('homepage-sections/section','header');
get_template_part('homepage-sections/section','about');
get_template_part('homepage-sections/section','hire-me');
get_template_part('homepage-sections/section','skills');
get_template_part('homepage-sections/section','resume');
get_template_part('homepage-sections/section','services');
get_template_part('homepage-sections/section','portfolio');
get_template_part('homepage-sections/section','subscribe');
get_template_part('homepage-sections/section','contact');
get_footer();