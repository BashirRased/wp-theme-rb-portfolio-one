<?php
// Bashir Rased With File Directory
define('BASHIR_RASED_URL',get_template_directory_uri());
define('BASHIR_RASED_CSS',BASHIR_RASED_URL.'/assets/css/');
define('BASHIR_RASED_JS',BASHIR_RASED_URL.'/assets/js/');
define('BASHIR_RASED_IMG',BASHIR_RASED_URL.'/assets/img/');

function bashir_rased_google_font_css(){
    // Google Font
	wp_enqueue_style('bashir-rased-google-fonts','://fonts.googleapis.com/css?family=Roboto:400,700&display=swap','',wp_get_theme()->get('Version'),'all');
}
add_action('wp_enqueue_scripts','bashir_rased_google_font_css');

function bashir_rased_fontawesome_css(){
    // Font Awesome v5.10.2
	wp_enqueue_style('bashir-rased-font-awesome',BASHIR_RASED_CSS.'font-awesome-5.10.2.min.css','','5.10.2','all');
}
add_action('wp_enqueue_scripts','bashir_rased_fontawesome_css');

function bashir_rased_bootstrap_assets(){
    // Bootstrap-4 CSS v4.0.0
	wp_enqueue_style('bashir-rased-bootstrap-css',BASHIR_RASED_CSS.'bootstrap-4.0.0.min.css','','4.0.0','all');

    // Bootstrap-4 popper JS v1.12.9
    wp_enqueue_script('bashir-rased-popper-js',BASHIR_RASED_JS.'popper-1.12.9.min.js',array('jquery'),'1.12.9',true);
    
    // Bootstrap-4 JS v4.0.0
    wp_enqueue_script('bashir-rased-bootstrap-js',BASHIR_RASED_JS.'bootstrap-4.0.0.min.js',array('jquery','bashir-rased-popper-js'),'4.0.0',true);
}
add_action('wp_enqueue_scripts','bashir_rased_bootstrap_assets');

function bashir_rased_jquery_plugin_assets(){
    // fancybox-3 CSS v3.5.7
	wp_enqueue_style('bashir-rased-fancybox-3-css',BASHIR_RASED_CSS.'jquery.fancybox-3.5.7.min.css','','3.5.7','all');

    // fancybox-3 JS v3.5.7
    wp_enqueue_script('bashir-rased-fancybox-3-js',BASHIR_RASED_JS.'jquery.fancybox-3.5.7.min.js',array('jquery'),'3.5.7',true);

    // isotope JS v3.0.6
    wp_enqueue_script('bashir-rased-isotope-js',BASHIR_RASED_JS.'isotope.pkgd-3.0.6.min.js',array('jquery'),'3.0.6',true);

    // Nicescroll JS v3.5.4
    wp_enqueue_script('bashir-rased-nicescroll-js',BASHIR_RASED_JS.'jquery.nicescroll-3.5.4.min.js',array('jquery'),'3.5.4',true);
}
add_action('wp_enqueue_scripts','bashir_rased_jquery_plugin_assets');

function bashir_rased_browser_config_assets(){
    // Normalize v8.0.1
	wp_enqueue_style('bashir-rased-normalize-css',BASHIR_RASED_CSS.'normalize-8.0.1.min.css','','8.0.1','all');

    // Modernizr v2.8.3
	wp_enqueue_script('bashir-rased-modernizr-js',BASHIR_RASED_JS.'modernizr-2.8.3.min.js',array('jquery'),'2.8.3',true);
}
add_action('wp_enqueue_scripts','bashir_rased_browser_config_assets');

function bashir_rased_theme_custom_assets(){
    // Theme Style CSS v1.0.3
    wp_enqueue_style('bashir-rased-style',BASHIR_RASED_CSS.'style.css','','1.0.3','all');

    // Theme Responsive CSS v1.0.3
    wp_enqueue_style('bashir-rased-responsive',BASHIR_RASED_CSS.'responsive.css','','1.0.3','all');

    // Theme Color CSS v1.0.3
    wp_enqueue_style('bashir-rased-color',BASHIR_RASED_CSS.'color/default-color.css','','1.0.3','all');

    // Theme Preloader CSS v1.0.3
    wp_enqueue_style('bashir-rased-preloader',BASHIR_RASED_CSS.'preloader.css','','1.0.3','all');

    // Theme Type JS v1.0.3
    wp_enqueue_script('bashir-rased-type-js',BASHIR_RASED_JS.'type.js','','1.0.3',true);

    // Theme Custom JS v1.0.3
    wp_enqueue_script('bashir-rased-custom-js',BASHIR_RASED_JS.'custom.js',array('jquery'),'1.0.3',true);
}
add_action('wp_enqueue_scripts','bashir_rased_theme_custom_assets');

function bashir_rased_wp_assets(){
    // WP Required Stylesheet
	wp_enqueue_style('bashir-rased-wp-stylesheet', get_stylesheet_uri(),'',wp_get_theme()->get('Version'),'all');

    // Threaded comment reply styles.
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

    // Skip Link Focus JS
    wp_enqueue_script('bashir-rased-skip-link-js',BASHIR_RASED_JS.'skip-link-focus-fix.js','','1.0.3',true);
}
add_action('wp_enqueue_scripts','bashir_rased_wp_assets');

function bashir_rased_conditional_assets(){
    // html5shim Conditional JS v3.7.3
	wp_enqueue_script('bashir-rased-html5shim-js',BASHIR_RASED_JS.'html5shiv-printshiv-3.7.3.min.js', array(),'3.7.3',false);
	wp_script_add_data('bashir-rased-html5shim-js','conditional','lt ie 9');
	
    // respond Conditional JS v1.4.2
	wp_enqueue_script('bashir-rased-respond-js',BASHIR_RASED_JS.'respond-1.4.2.min.js',array(),'1.4.2',false);
	wp_script_add_data('bashir-rased-respond-js','conditional','lt ie 9');
}
add_action('wp_enqueue_scripts','bashir_rased_conditional_assets');