<?php
/**
 * The template for loaded all third party css & js files.
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 * 
 * The template loading under functions.php.
 *
 * @package RB_Themes
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

// Bootstrap v5.3.0 Root
define( 'BOOTSTRAP_ASSETS', THEME_ROOT . '/third-party/bootstrap/' );

// jQuery meanMenu v2.0.8 Root
define( 'MEAN_MENU_ASSETS', THEME_ROOT . '/third-party/mean-menu/' );
/*=================================================
===== 01. Prefix with file directory End Here =====
=================================================*/

/*=========================================
===== 03. Bootstrap v5.3.0 Start Here =====
=========================================*/
function rb_portfolio_one_bootstrap_assets() {    
    // Bootstrap CSS v5.3.0
	wp_enqueue_style( 'bootstrap', BOOTSTRAP_ASSETS . 'bootstrap.css', '', '5.3.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'rb_portfolio_one_bootstrap_assets' );
/*=======================================
===== 03. Bootstrap v5.3.0 End Here =====
=======================================*/

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