<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.6
 * @since RB Portfolio One 1.1.6
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

// Skip Focus Link
if(file_exists(dirname(__FILE__).'/inc/common-functions.php')) {
	require_once(dirname(__FILE__).'/inc/common-functions.php');
}

// Breadcrumbs
if(file_exists(dirname(__FILE__).'/inc/breadcrumbs.php')) {
	require_once(dirname(__FILE__).'/inc/breadcrumbs.php');
}

// TGM Plugin Activation
if(file_exists(dirname(__FILE__).'/lib/TGM-Plugin-Activation-2.6.1/class-tgm-plugin-activation.php')) {
	require_once(dirname(__FILE__).'/lib/TGM-Plugin-Activation-2.6.1/class-tgm-plugin-activation.php');
}

// TGM Plugin Customization
if(file_exists(dirname(__FILE__).'/inc/tgm-plugin-customization.php')) {
	require_once(dirname(__FILE__).'/inc/tgm-plugin-customization.php');
}

// Theme Basic Functions
if( file_exists ( dirname( __FILE__ ) . '/customizer/kirki-customizer.php' ) ) {
	require_once( dirname( __FILE__ ) . '/customizer/kirki-customizer.php' );
} 

// TGM Plugin Customization
if(file_exists(dirname(__FILE__).'/inc/theme-helper.php')) {
	require_once(dirname(__FILE__).'/inc/theme-helper.php');
}