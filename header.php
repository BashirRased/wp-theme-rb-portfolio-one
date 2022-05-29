<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.0
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
<a class="skip-link screen-reader-text" href="#bashir-rased-page-content">
    <?php esc_html_e('Skip to content', 'bashir-rased'); ?>
</a>