<?php
/**
 * The template for tgm all required & recommander plugin list.
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.9
 * @since RB Portfolio One 1.1.9
 */
 
function rb_portfolio_one_required_plugins() {

	$plugins = array(

		// Use this plugin for Contact Form
		array(
			'name'      => __('Contact Form 7', 'rb-portfolio-one'),
			'slug'      => 'contact-form-7',
			'required'  => false,
		),

		// Use this plugin for Social Media Links
		array(
			'name'      => __('RB Site Social Links','rb-portfolio-one'),
			'slug'      => 'rb-site-social-links',
			'required'  => false,
		),

		// Use this plugin for Newsletter
		array(
			'name'      => __('MailPoet – emails and newsletters in WordPress','rb-portfolio-one'),
			'slug'      => 'mailpoet',
			'recommend'  => true,
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
add_action('tgmpa_register','rb_portfolio_one_required_plugins');