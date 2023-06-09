<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.8
 * @since RB Portfolio One 1.1.8
 */

?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#page-content">
    <?php esc_html_e('Skip to content', 'rb-portfolio-one'); ?>
</a>

<?php
do_action ( 'rb_portfolio_one_theme_option_preloader' );
do_action ( 'rb_portfolio_one_theme_option_header_top' );
get_template_part('template-parts/header-menu');
do_action ( 'rb_portfolio_one_theme_option_breadcrumbs' );