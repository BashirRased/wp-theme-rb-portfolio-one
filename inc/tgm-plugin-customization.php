<?php

function bashirrased_required_plugins() {

	$plugins = array(

		array(
			'name'      => 'Codestar Framework',
			'slug'      => 'codestar-framework',
			'required'  => true,
			'source'      => 'https://github.com/Codestar/codestar-framework/archive/refs/heads/master.zip'
		),

		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => true,
		),

		array(
			'name'      => 'Custom Post Type UI',
			'slug'      => 'custom-post-type-ui',
			'required'  => true,
		),

		array(
			'name'      => 'CMB2',
			'slug'      => 'cmb2',
			'required'  => true,
		),

		array(
			'name'      => 'RB Site Social Links',
			'slug'      => 'rb-site-social-links',
			'required'  => true,
		),

		array(
			'name'      => 'MC4WP: Mailchimp for WordPress',
			'slug'      => 'mailchimp-for-wp',
			'required'  => true,
		),

		array(
			'name'      => 'Theme Check',
			'slug'      => 'theme-check',
			'required'  => false,
		),

		array(
			'name'      => 'Envato Theme Check',
			'slug'      => 'envato-theme-check',
			'required'  => false,
			'source'      => 'https://github.com/envato/envato-theme-check/archive/refs/heads/master.zip'
		),

		array(
			'name'      => 'FakerPress',
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
add_action('tgmpa_register','bashirrased_required_plugins');