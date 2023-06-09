<?php
/**
 * The template for loaded all third party css & js files.
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 * 
 * The template loading under functions.php.
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.7
 * @since RB Portfolio One 1.1.7
 */

/*==================================
Table of Theme Asset List Start Here
====================================
	01. Prefix with file directory
	02. Font Awesome v6.3.0
	03. Bootstrap v5.3.0
    04. jQuery Nice Select v1.0
    05. jQuery meanMenu v2.0.8
    06. Browser Config Assets
    07. Conditional JS
==================================
Table of Theme Asset List End Here
================================*/

/*===================================================
===== 01. Prefix with file directory Start Here =====
===================================================*/
// Home Root
define( 'THEME_ROOT', get_template_directory_uri() );

// Font Awesome v6.3.0 Root
define( 'FONT_AWESOME_CSS', THEME_ROOT . '/third-party/font-awesome/css/' );

// Bootstrap v5.3.0 Root
define( 'BOOTSTRAP_ASSETS', THEME_ROOT . '/third-party/bootstrap/' );

// jQuery Nice Select v1.0 Root
define( 'NICE_SELECT_ASSETS', THEME_ROOT . '/third-party/nice-select/' );

// jQuery meanMenu v2.0.8 Root
define( 'MEAN_MENU_ASSETS', THEME_ROOT . '/third-party/mean-menu/' );

// Normalize v8.0.1 Root
define( 'NORMALIZE_CSS', THEME_ROOT . '/third-party/normalize/' );

// Modernizr v2.8.3 Root
define( 'MODERNIZR_JS', THEME_ROOT . '/third-party/modernizr/' );

// Html5shiv Printshiv v3.7.3 Root
define( 'HTML5SHIV_PRINTSHIV_JS', THEME_ROOT . '/third-party/html5shiv-printshiv/' );

// Respond v1.4.2 Root
define( 'RESPOND_JS', THEME_ROOT . '/third-party/respond/' );
/*=================================================
===== 01. Prefix with file directory End Here =====
=================================================*/

/*============================================
===== 02. Font Awesome v6.4.0 Start Here =====
============================================*/
function rb_portfolio_one_fontawesome_css() {    
	wp_enqueue_style( 'font-awesome', FONT_AWESOME_CSS .'font-awesome.css', '', '6.4.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'rb_portfolio_one_fontawesome_css' );
/*==========================================
===== 02. Font Awesome v6.4.0 End Here =====
==========================================*/

/*=========================================
===== 03. Bootstrap v5.3.0 Start Here =====
=========================================*/
function rb_portfolio_one_bootstrap_assets() {    
    // Bootstrap CSS v5.3.0
	wp_enqueue_style( 'bootstrap', BOOTSTRAP_ASSETS . 'bootstrap.css', '', '5.3.0', 'all' );

    // Popper JS v2.11.7
    wp_enqueue_script( 'popper', BOOTSTRAP_ASSETS . 'popper.js', array( 'jquery' ), '2.11.7', true);
    
    // Bootstrap JS v5.3.0
    wp_enqueue_script( 'bootstrap', BOOTSTRAP_ASSETS . 'bootstrap.js', array( 'jquery', 'popper' ), '5.3.0', true);
}
add_action( 'wp_enqueue_scripts', 'rb_portfolio_one_bootstrap_assets' );
/*=======================================
===== 03. Bootstrap v5.3.0 End Here =====
=======================================*/

/*==================================================
===== 04. jQuery Nice Select v1.1.0 Start Here =====
==================================================*/
function rb_portfolio_one_nice_select_assets() {    
    // Nice Select CSS v1.1.0
	wp_enqueue_style( 'nice-select', NICE_SELECT_ASSETS . 'nice-select.css', '', '1.1.0', 'all');

    // Nice Select JS v1.1.0
    wp_enqueue_script( 'jquery-nice-select', NICE_SELECT_ASSETS . 'jquery.nice-select.js', array( 'jquery' ), '1.1.0', true );
}
add_action( 'wp_enqueue_scripts', 'rb_portfolio_one_nice_select_assets' );
/*================================================
===== 04. jQuery Nice Select v1.1.0 End Here =====
================================================*/

/*===============================================
===== 05. jQuery meanMenu v2.0.8 Start Here =====
===============================================*/
function rb_portfolio_one_mean_menu_assets() {    
    // Mean Menu v2.0.7
	wp_enqueue_style( 'meanmenu', MEAN_MENU_ASSETS . 'meanmenu.css', '', '2.0.7', 'all');

    // Mean Menu v2.0.8
    wp_enqueue_script( 'jquery-meanmenu', MEAN_MENU_ASSETS . 'jquery.meanmenu.js', array( 'jquery' ), '2.0.8', true );
}
add_action( 'wp_enqueue_scripts', 'rb_portfolio_one_mean_menu_assets' );
/*=============================================
===== 05. jQuery meanMenu v2.0.8 End Here =====
=============================================*/

/*==============================================
===== 06. Browser Config Assets Start Here =====
==============================================*/
function rb_portfolio_one_browser_config_assets() {
    // Normalize v8.0.1
	wp_enqueue_style( 'normalize', NORMALIZE_CSS . 'normalize.css', '', '8.0.1', 'all' );

    // Modernizr v2.8.3
	wp_enqueue_script( 'modernizr', MODERNIZR_JS . 'modernizr.js', array( 'jquery' ), '2.8.3', true );
}
add_action( 'wp_enqueue_scripts', 'rb_portfolio_one_browser_config_assets' );
/*============================================
===== 06. Browser Config Assets End Here =====
============================================*/

/*=======================================
===== 07. Conditional JS Start Here =====
=======================================*/
function rb_portfolio_one_conditional_assets() {
    // html5shim Conditional JS v3.7.3
	wp_enqueue_script('html5shim-printshiv', HTML5SHIV_PRINTSHIV_JS . 'html5shiv-printshiv.js', '', '3.7.3', false);
	wp_script_add_data( 'html5shim-printshiv', 'conditional', 'lt IE 11' );
	
    // respond Conditional JS v1.4.2
	wp_enqueue_script( 'respond', RESPOND_JS . 'respond.js', '', '1.4.2', false );
	wp_script_add_data( 'respond', 'conditional', 'lt IE 11' );
}
add_action( 'wp_enqueue_scripts', 'rb_portfolio_one_conditional_assets' );
/*=====================================
===== 07. Conditional JS End Here =====
=====================================*/