<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RB_Themes
 */

// Theme Setup
if(file_exists(dirname(__FILE__).'/inc/after-theme-setup.php')) {
	require_once(dirname(__FILE__).'/inc/after-theme-setup.php');
}

// Theme Assets
if( file_exists( dirname( __FILE__ ) . '/inc/third-party-assets.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/third-party-assets.php' );
}

// Theme Assets
if(file_exists(dirname(__FILE__).'/inc/theme-assets.php')) {
	require_once(dirname(__FILE__).'/inc/theme-assets.php');
}

// Theme Widgets
if(file_exists(dirname(__FILE__).'/inc/widget-register.php')) {
	require_once(dirname(__FILE__).'/inc/widget-register.php');
}

// Common Functions
if(file_exists(dirname(__FILE__).'/inc/common-functions.php')) {
	require_once(dirname(__FILE__).'/inc/common-functions.php');
}

// Breadcrumbs
if(file_exists(dirname(__FILE__).'/inc/breadcrumbs.php')) {
	require_once(dirname(__FILE__).'/inc/breadcrumbs.php');
}

// TGM Plugin Activation
if(file_exists(dirname(__FILE__).'/lib/tgm-plugin.php')) {
	require_once(dirname(__FILE__).'/lib/tgm-plugin.php');
	require_once(dirname(__FILE__).'/inc/recommended-plugin.php');
}

// Action Hooks
if(file_exists(dirname(__FILE__).'/inc/action-hooks.php')) {
	require_once(dirname(__FILE__).'/inc/action-hooks.php');
}

// Font Awesome support after install elementor
function rb_portfolio_one_font_awesome_7() {
    // Latest FA7 from CDN
    wp_enqueue_style(
        'font-awesome-7',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css',
        [],
        '7.0.0'
    );
}
add_action('wp_enqueue_scripts', 'rb_portfolio_one_font_awesome_7');
add_action('elementor/editor/after_enqueue_styles', 'rb_portfolio_one_font_awesome_7');
