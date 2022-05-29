<?php
/**
 * The template for tgm all required & recommander plugin list.
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.1
 */
 
function bashir_rased_required_plugins() {

	$plugins = array(

		// Use this plugin for Theme Opitons
		array(
			'name'      => __('Codestar Framework', 'bashir-rased'),
			'slug'      => 'codestar-framework',
			'required'  => true,
			'source'      => 'https://github.com/Codestar/codestar-framework/archive/refs/heads/master.zip'
		),

		// Use this plugin for Contact Form
		array(
			'name'      => __('Contact Form 7', 'bashir-rased'),
			'slug'      => 'contact-form-7',
			'required'  => true,
		),

		// Use this plugin for Custom Post
		array(
			'name'      => __('Custom Post Type UI','bashir-rased'),
			'slug'      => 'custom-post-type-ui',
			'required'  => true,
		),

		// Use this plugin for Post Meta
		array( 
			'name'      => __('CMB2','bashir-rased'),
			'slug'      => 'cmb2',
			'required'  => true,
		),

		// Use this plugin for Social Media Links
		array(
			'name'      => __('RB Site Social Links','bashir-rased'),
			'slug'      => 'rb-site-social-links',
			'required'  => true,
		),

		// Use this plugin for Newsletter
		array(
			'name'      => __('MailPoet – emails and newsletters in WordPress','bashir-rased'),
			'slug'      => 'mailpoet',
			'required'  => true,
		)

	);

	$config = array(
		'id'           => 'tgmpa', 
		'default_path' => '', 
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php', 
		'capability'   => 'edit_theme_options',  
		'has_notices'  => true, 
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => ''
	);

	tgmpa( $plugins, $config );

}
add_action('tgmpa_register','bashir_rased_required_plugins');