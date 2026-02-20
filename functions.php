<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RB_Themes
 * @subpackage RB_Portfolio_One
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define theme base path for includes.
define( 'RB_PORTFOLIO_ONE_INC_PATH', get_template_directory() . '/inc/' );
define( 'RB_PORTFOLIO_ONE_LIB_PATH', get_template_directory() . '/assets/lib/php/' );

/**
 * Load theme includes if files exist.
 *
 * Keeping each functionality in separate files helps maintain clean code.
 */
$file_includes = array(
	'theme-setup.php', // Core setup and supports.
	'theme-assets.php',    // Styles and scripts.
	'theme-widgets.php',   // Widget areas.
	'breadcrumbs.php', // Breadcrumbs.
	'theme-functions.php', // All theme common functions.
	'theme-menus.php',   // Theme menus.
	'theme-plugins.php', // Required plugins.
	'post-functions.php', // Post functions.
);

foreach ( $file_includes as $file ) {
	$filepath = RB_PORTFOLIO_ONE_INC_PATH . $file;
	if ( file_exists( $filepath ) ) {
		require_once $filepath;
	}
}

/**
 * Load the required library.
 */
$file_libs = array(
	'class-tgm-plugin-activation.php', // TGM Plugin.
);

foreach ( $file_libs as $file ) {
	$filepath = RB_PORTFOLIO_ONE_LIB_PATH . $file;
	if ( file_exists( $filepath ) ) {
		require_once $filepath;
	}
}

// Theme Assets.
if ( file_exists( __DIR__ . '/inc/third-party-assets.php' ) ) {
	require_once __DIR__ . '/inc/third-party-assets.php';
}

// Common Functions.
if ( file_exists( __DIR__ . '/inc/common-functions.php' ) ) {
	require_once __DIR__ . '/inc/common-functions.php';
}

// Action Hooks.
if ( file_exists( __DIR__ . '/inc/action-hooks.php' ) ) {
	require_once __DIR__ . '/inc/action-hooks.php';
}

/**
 * Font Awesome support after install elementor.
 */
function rb_portfolio_one_font_awesome_7() {
	// Latest FA7 from CDN.
	wp_enqueue_style(
		'font-awesome-7',
		get_template_directory_uri() . '/assets/lib/css/font-awesome.css',
		array(),
		'7.1.0'
	);
}
add_action( 'wp_enqueue_scripts', 'rb_portfolio_one_font_awesome_7' );
add_action( 'elementor/editor/after_enqueue_styles', 'rb_portfolio_one_font_awesome_7' );
