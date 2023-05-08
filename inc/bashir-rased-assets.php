<?php
/**
 * The template for loading all css & js files.
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */
 
// Bashir Rased With File Directory
define('BASHIR_RASED_URL',get_template_directory_uri());
define('BASHIR_RASED_CSS',BASHIR_RASED_URL.'/assets/css/');
define('BASHIR_RASED_JS',BASHIR_RASED_URL.'/assets/js/');
define('BASHIR_RASED_IMG',BASHIR_RASED_URL.'/assets/img/');

add_editor_style( array(bashir_rased_google_fonts() ) );
/**
 * Register Google fonts.
 */
function bashir_rased_google_fonts() {
	$fonts_url = '';
	$font_families = array();
	$font_families[] = 'Roboto:400,700';
	$query_args = array(
		'family' => urlencode( implode( '|', $font_families ) ),
		'subset' => urlencode( 'latin,latin-ext' ),
	);
	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	return esc_url_raw( $fonts_url );
}

function bashir_rased_google_font_css(){
    // Google Font
	wp_enqueue_style('bashir-rased-google-fonts',bashir_rased_google_fonts(),'',wp_get_theme()->get('Version'),'all');
}
add_action('wp_enqueue_scripts','bashir_rased_google_font_css');

function bashir_rased_fontawesome_css(){
    // Font Awesome v6.2.0
	wp_enqueue_style('font-awesome',BASHIR_RASED_CSS.'font-awesome.min.css','','6.2.0','all');
}
add_action('wp_enqueue_scripts','bashir_rased_fontawesome_css');

function bashir_rased_bootstrap_assets(){
    // Bootstrap-5 CSS v5.2.0
	wp_enqueue_style('bootstrap',BASHIR_RASED_CSS.'bootstrap.min.css','','5.2.0','all');

    // Bootstrap-5 popper JS v2.11.5
    wp_enqueue_script('popper',BASHIR_RASED_JS.'popper.min.js',array('jquery'),'2.11.5',true);
    
    // Bootstrap-5 JS v5.2.0
    wp_enqueue_script('bootstrap',BASHIR_RASED_JS.'bootstrap.min.js',array('jquery','popper'),'5.2.0',true);
}
add_action('wp_enqueue_scripts','bashir_rased_bootstrap_assets');

function bashir_rased_browser_config_assets(){
    // Normalize v8.0.1
	wp_enqueue_style('normalize',BASHIR_RASED_CSS.'normalize.min.css','','8.0.1','all');

    // Modernizr v2.8.3
	wp_enqueue_script('modernizr',BASHIR_RASED_JS.'modernizr.min.js',array('jquery'),'2.8.3',true);
}
add_action('wp_enqueue_scripts','bashir_rased_browser_config_assets');

function bashir_rased_theme_custom_assets(){
    // Theme Style CSS v1.1.3
    wp_enqueue_style('bashir-rased-style',BASHIR_RASED_CSS.'style.css','','1.1.3','all');

    // Theme Responsive CSS v1.1.3
    wp_enqueue_style('bashir-rased-responsive',BASHIR_RASED_CSS.'responsive.css','','1.1.3','all');

    // Theme Color CSS v1.1.3
    wp_enqueue_style('bashir-rased-color',BASHIR_RASED_CSS.'color/default-color.css','','1.1.3','all');

    // Theme Preloader CSS v1.1.3
    wp_enqueue_style('bashir-rased-preloader',BASHIR_RASED_CSS.'preloader.css','','1.1.3','all');

    // Theme Custom JS v1.1.3
    wp_enqueue_script('bashir-rased-custom-js',BASHIR_RASED_JS.'custom.js',array('jquery'),'1.1.3',true);
}
add_action('wp_enqueue_scripts','bashir_rased_theme_custom_assets');

function bashir_rased_wp_assets(){
    // WP Required Stylesheet
	wp_enqueue_style('bashir-rased-wp-stylesheet', get_stylesheet_uri(),'',wp_get_theme()->get('Version'),'all');

    // Threaded comment reply styles.
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts','bashir_rased_wp_assets');

function bashir_rased_conditional_assets(){
    // html5shim Conditional JS v3.7.3
	wp_enqueue_script('html5shim-printshiv',BASHIR_RASED_JS.'html5shiv-printshiv.min.js', array(),'3.7.3',false);
	wp_script_add_data('html5shim-printshiv','conditional','lt ie 9');
	
    // respond Conditional JS v1.4.2
	wp_enqueue_script('respond',BASHIR_RASED_JS.'respond.min.js',array(),'1.4.2',false);
	wp_script_add_data('respond','conditional','lt ie 9');
}
add_action('wp_enqueue_scripts','bashir_rased_conditional_assets');