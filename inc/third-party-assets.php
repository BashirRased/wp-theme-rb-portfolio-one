<?php
/**
 * The template for loaded all third party css & js files.
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 *
 * The template loading under functions.php.
 *
 * @package RB_Themes
 * @subpackage RB_Portfolio_One
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
==================================
Table of Theme Asset List Start Here
====================================
	01. Prefix with file directory
	02. Font Awesome v6.3.0
	03. Bootstrap v5.3.0
	04. jQuery meanMenu v2.0.8
*/

// Home Root.
define( 'THEME_ROOT', get_template_directory_uri() );

// Bootstrap v5.3.0 Root.
define( 'BOOTSTRAP_ASSETS', THEME_ROOT . '/assets/lib/css/' );

// jQuery meanMenu v2.0.8 Root.
define( 'MEAN_MENU_ASSETS', THEME_ROOT . '/third-party/mean-menu/' );

if ( ! function_exists( 'rb_portfolio_one_bootstrap_assets' ) ) {
	/**
	 * Enqueue Bootstrap
	 */
	function rb_portfolio_one_bootstrap_assets() {
		// Bootstrap CSS v5.3.8.
		wp_enqueue_style( 'bootstrap', BOOTSTRAP_ASSETS . 'bootstrap.css', '', '5.3.8', 'all' );
	}
	add_action( 'wp_enqueue_scripts', 'rb_portfolio_one_bootstrap_assets' );
}

if ( ! function_exists( 'rb_portfolio_one_mean_menu_assets' ) ) {
	/**
	 * Enqueue jQuery meanMenu
	 */
	function rb_portfolio_one_mean_menu_assets() {
		// Mean Menu v2.0.7.
		wp_enqueue_style( 'meanmenu', MEAN_MENU_ASSETS . 'meanmenu.css', '', '2.0.7', 'all' );

		// Mean Menu v2.0.8.
		wp_enqueue_script( 'jquery-meanmenu', MEAN_MENU_ASSETS . 'jquery.meanmenu.js', array( 'jquery' ), '2.0.8', true );
	}
	add_action( 'wp_enqueue_scripts', 'rb_portfolio_one_mean_menu_assets' );
}
