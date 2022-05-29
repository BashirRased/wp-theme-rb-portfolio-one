<?php

if ( ! function_exists('bashirrased_theme_setup') ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Bashir Rased 1.0.3
	 *
	 * @return void
	 */
    function bashirrased_theme_setup() {        
        /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Twenty-One, use a find and replace
		 * to change 'bashir-rased' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('bashir-rased', get_template_directory().'/languages');

        // Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

        /*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support('title-tag');

        /**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// Menu Register
        register_nav_menu('header_menu', __('Header Menu','bashir-rased'));

		// Set content-width.
        $GLOBALS['content_width'] = apply_filters( 'bashirrased_content_width', 730 );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		$bashir_rased_html5 = array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'navigation-widgets'
        );
        add_theme_support('html5', $bashir_rased_html5); 

        /*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		$bashir_rased_custom_logo = array(
			'height'               => $logo_height,
			'width'                => $logo_width,
			'flex-width'           => true,
			'flex-height'          => true,
			'unlink-homepage-logo' => true,
		);
		add_theme_support('custom-logo', $bashir_rased_custom_logo);

		// Custom header.
        $bashir_rased_custom_header = array(
            'width'              => 1000,
            'height'             => 250,
            'flex-width'         => true,
            'flex-height'        => true,
        );
        add_theme_support('custom-header', $bashir_rased_custom_header);

		// Add support for Block Styles.
		add_theme_support('wp-block-styles');

		// Add support for full and wide align images.
		add_theme_support('align-wide');

		// Enqueue editor styles.
		add_editor_style('./assets/css/style-editor.css');

        // Custom background color.		
		$bashir_rased_custom_bg = array(
			'default-color' => 'd1e4dd',
		);
		add_theme_support('custom-background', $bashir_rased_custom_bg); 

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');

	}
}
add_action( 'after_setup_theme', 'bashirrased_theme_setup');