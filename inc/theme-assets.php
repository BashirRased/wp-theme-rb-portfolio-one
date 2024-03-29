<?php
/**
 * The template for loading all css & js files.
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.9
 * @since RB Portfolio One 1.1.9
 */
 
// Bashir Rased With File Directory
define('rb_portfolio_one_URL',get_template_directory_uri());
define('rb_portfolio_one_CSS',rb_portfolio_one_URL.'/assets/css/');
define('rb_portfolio_one_JS',rb_portfolio_one_URL.'/assets/js/');

add_editor_style( array(rb_portfolio_one_google_fonts() ) );
/**
 * Register Google fonts.
 */
function rb_portfolio_one_google_fonts() {
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

function rb_portfolio_one_google_font_css(){
    // Google Font
	wp_enqueue_style('rb-portfolio-one-google-font',rb_portfolio_one_google_fonts(),'',wp_get_theme()->get('Version'),'all');
}
add_action('wp_enqueue_scripts','rb_portfolio_one_google_font_css');


function rb_portfolio_one_theme_custom_assets(){
    // Default CSS
    wp_enqueue_style( 'rb-portfolio-one-default', rb_portfolio_one_CSS . 'default.css','', time(), 'all' );

    // Theme Style CSS
    wp_enqueue_style( 'rb-portfolio-one-style', rb_portfolio_one_CSS . 'style.css', '', time(), 'all' );

    // Responsive CSS
    wp_enqueue_style( 'rb-portfolio-one-responsive', rb_portfolio_one_CSS . 'responsive.css', '', time(), 'all' );	

    // Theme Custom JS
    wp_enqueue_script( 'rb-portfolio-one-custom', rb_portfolio_one_JS . 'custom.js',array( 'jquery' ), time(), true );
}
add_action('wp_enqueue_scripts','rb_portfolio_one_theme_custom_assets');

function rb_portfolio_one_wp_assets(){
    // WP Required Style
	wp_enqueue_style('rb-portfolio-one-wp-style', get_stylesheet_uri(),'',wp_get_theme()->get('Version'),'all');

    // Threaded comment reply styles.
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts','rb_portfolio_one_wp_assets');