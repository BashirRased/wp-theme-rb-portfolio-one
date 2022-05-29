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
 * @subpackage bashir-rased
 * @since Bashir Rased 1.0.0
 */

get_header();
get_template_part('template-parts/preloader');
get_template_part('template-parts/header-top');
get_template_part('template-parts/header-menu');

$bashir_rased_data = get_option('bashir_rased_theme_option');
$bashir_rased_homepage_sections = $bashir_rased_data['bashir-rased-homepage-section-control']['enabled'];

if (class_exists('CSF') && isset($bashir_rased_homepage_sections) && !empty($bashir_rased_homepage_sections) ): foreach ( $bashir_rased_homepage_sections as $key => $value ) {
    switch($key) {
        case 'header': get_template_part( 'homepage-sections/section', 'header');
        break;
        
        case 'about': get_template_part( 'homepage-sections/section', 'about');
        break;

        case 'hire-me': get_template_part( 'homepage-sections/section', 'hire-me');
        break;

        case 'skills': get_template_part( 'homepage-sections/section', 'skills');
        break;

        case 'resume': get_template_part( 'homepage-sections/section', 'resume');
        break;

        case 'services': get_template_part( 'homepage-sections/section', 'services');
        break;

        case 'portfolio': get_template_part( 'homepage-sections/section', 'portfolio');
        break;

        case 'subscribe': get_template_part( 'homepage-sections/section', 'subscribe');
        break;

        case 'contact': get_template_part( 'homepage-sections/section', 'contact');
        break;
        
    }
}

else:
    
get_template_part('homepage-sections/section','header');
get_template_part('homepage-sections/section','about');
get_template_part('homepage-sections/section','hire-me');
get_template_part('homepage-sections/section','skills');
get_template_part('homepage-sections/section','resume');
get_template_part('homepage-sections/section','services');
get_template_part('homepage-sections/section','portfolio');
get_template_part('homepage-sections/section','subscribe');
get_template_part('homepage-sections/section','contact');

endif;
get_footer();