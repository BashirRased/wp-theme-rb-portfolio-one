<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

// Theme Setup
if(file_exists(dirname(__FILE__).'/inc/bashir-rased-theme-setup.php')) {
	require_once(dirname(__FILE__).'/inc/bashir-rased-theme-setup.php');
}

// Theme Assets
if(file_exists(dirname(__FILE__).'/inc/bashir-rased-assets.php')) {
	require_once(dirname(__FILE__).'/inc/bashir-rased-assets.php');
}

// Theme Widgets
if(file_exists(dirname(__FILE__).'/inc/bashir-rased-widgets.php')) {
	require_once(dirname(__FILE__).'/inc/bashir-rased-widgets.php');
}

// Skip Focus Link
if(file_exists(dirname(__FILE__).'/inc/bashir-rased-skip-focus-links.php')) {
	require_once(dirname(__FILE__).'/inc/bashir-rased-skip-focus-links.php');
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

// Codestar Framework Customization
if(file_exists(dirname(__FILE__).'/inc/codestar-framework-customization.php')) {
	require_once(dirname(__FILE__).'/inc/codestar-framework-customization.php');
}