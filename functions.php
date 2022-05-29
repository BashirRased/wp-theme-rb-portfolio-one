<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.6
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

// CMB2 Metabox Customization
if(file_exists(dirname(__FILE__).'/inc/cmb2-metabox-customization.php')) {
	require_once(dirname(__FILE__).'/inc/cmb2-metabox-customization.php');
}