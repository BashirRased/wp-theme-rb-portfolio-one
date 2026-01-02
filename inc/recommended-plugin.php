<?php
/**
 * The template for tgm all required & recommander plugin list.
 *
 * @package RB_Themes
 */
 
function rb_portfolio_one_required_plugins() {
	$plugins = array(
		
		// Use this plugin for your custom page design
		array(
			'name'      => esc_html__('Elementor Website Builder', 'rb-portfolio-one'),
			'slug'      => 'elementor',
			'required'  => false,
		),

		// Use this plugin for your custom page design with my custom design
		array(
			'name'      => esc_html__('RB Elementor Addons', 'rb-portfolio-one'),
			'slug'      => 'rb-elementor-addons',
			'required'  => false,
		),

		// Use this plugin for your theme edit options
		array(
			'name'      => esc_html__('Kirki Customizer Framework', 'rb-portfolio-one'),
			'slug'      => 'kirki',
			'required'  => false,
		),

		// Use this plugin for your theme edit options with my themes
		array(
			'name'      => esc_html__('RB Theme Helper', 'rb-portfolio-one'),
			'slug'      => 'rb-theme-helper',
			'required'  => false,
		),

		// Use this plugin for your page/post meta
		array(
			'name'      => esc_html__('Advanced Custom Fields', 'rb-portfolio-one'),
			'slug'      => 'advanced-custom-fields',
			'required'  => false,
		),

		// Use this plugin for your contact section
		array(
			'name'      => esc_html__('Contact Form 7', 'rb-portfolio-one'),
			'slug'      => 'contact-form-7',
			'required'  => false,
		),

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