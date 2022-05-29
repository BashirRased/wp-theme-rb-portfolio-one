<?php
/**
 * The template for tgm all required & recommander plugin list.
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.6
 */
 
function bashir_rased_required_plugins() {

	$plugins = array(

		array(
			'name'      => __('Codestar Framework', 'bashir-rased'),
			'slug'      => 'codestar-framework',
			'required'  => true,
			'source'      => 'https://github.com/Codestar/codestar-framework/archive/refs/heads/master.zip'
		),

		array(
			'name'      => __('Contact Form 7', 'bashir-rased'),
			'slug'      => 'contact-form-7',
			'required'  => true,
		),

		array(
			'name'      => __('Custom Post Type UI','bashir-rased'),
			'slug'      => 'custom-post-type-ui',
			'required'  => true,
		),

		array(
			'name'      => __('CMB2','bashir-rased'),
			'slug'      => 'cmb2',
			'required'  => true,
		),

		array(
			'name'      => __('RB Site Social Links','bashir-rased'),
			'slug'      => 'rb-site-social-links',
			'required'  => true,
		),

		array(
			'name'      => __('MC4WP: Mailchimp for WordPress','bashir-rased'),
			'slug'      => 'mailchimp-for-wp',
			'required'  => true,
		),

		array(
			'name'      => __('Theme Check','bashir-rased'),
			'slug'      => 'theme-check',
			'required'  => false,
		),

		array(
			'name'      => __('Envato Theme Check','bashir-rased'),
			'slug'      => 'envato-theme-check',
			'required'  => false,
			'source'      => 'https://github.com/envato/envato-theme-check/archive/refs/heads/master.zip'
		),

		array(
			'name'      => __('FakerPress','bashir-rased'),
			'slug'      => 'fakerpress',
			'required'  => false
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