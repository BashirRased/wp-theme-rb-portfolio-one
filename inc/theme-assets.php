<?php
/**
 * The template for loading all css & js files.
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.6
 * @since RB Portfolio One 1.1.6
 */
 
// Bashir Rased With File Directory
define('RBPO_URL',get_template_directory_uri());
define('RBPO_CSS',RBPO_URL.'/assets/css/');
define('RBPO_JS',RBPO_URL.'/assets/js/');

add_editor_style( array(rbpo_google_fonts() ) );
/**
 * Register Google fonts.
 */
function rbpo_google_fonts() {
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

function rbpo_google_font_css(){
    // Google Font
	wp_enqueue_style('rbpo-google-font',rbpo_google_fonts(),'',wp_get_theme()->get('Version'),'all');
}
add_action('wp_enqueue_scripts','rbpo_google_font_css');


function rbpo_theme_custom_assets(){
    // Default CSS
    wp_enqueue_style( 'rbpo-default', RBPO_CSS . 'default.css','', time(), 'all' );

    // Theme Style CSS
    wp_enqueue_style( 'rbpo-style', RBPO_CSS . 'style.css', '', time(), 'all' );

    // Responsive CSS
    wp_enqueue_style( 'rbpo-responsive', RBPO_CSS . 'responsive.css', '', time(), 'all' );	

    // Theme Custom JS
    wp_enqueue_script( 'rbpo-custom', RBPO_JS . 'custom.js',array( 'jquery' ), time(), true );
}
add_action('wp_enqueue_scripts','rbpo_theme_custom_assets');

function rbpo_wp_assets(){
    // WP Required Style
	wp_enqueue_style('rbpo-wp-style', get_stylesheet_uri(),'',wp_get_theme()->get('Version'),'all');

    // Threaded comment reply styles.
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts','rbpo_wp_assets');