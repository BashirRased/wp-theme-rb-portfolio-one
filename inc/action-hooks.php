<?php
/**
 * Action hooks for this theme
 *
 * @package RB_Themes
 * @subpackage RB_Portfolio_One
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'rb_portfolio_one_header_site_branding_output' ) ) {
	/**
	 * Header Site Branding Template
	 */
	function rb_portfolio_one_header_site_branding_output() {
		get_template_part( 'template-parts/header/site-branding' );
	}
	add_action( 'rb_portfolio_one_header_site_branding', 'rb_portfolio_one_header_site_branding_output' );
}

if ( ! function_exists( 'rb_portfolio_one_sidebar_choose' ) ) {
	/**
	 * Sidebar Choose
	 */
	function rb_portfolio_one_sidebar_choose() {

		$rb_portfolio_one_page_sidebar   = function_exists( 'get_field' ) ? get_field( 'main_sidebar' ) : 'no_sidebar';
		$rb_portfolio_one_global_sidebar = get_theme_mod( 'rb_portfolio_one_sidebar_choice', 'no-sidebar' );

		$is_singular = is_singular();
		$has_sidebar = is_active_sidebar( 'sidebar-1' );

		// Page level sidebar control.
		if ( 'no_sidebar' === $rb_portfolio_one_page_sidebar && $has_sidebar ) {

			get_template_part( $is_singular ? 'template-parts/content-single' : 'template-parts/content' );

		} elseif ( 'left_sidebar' === $rb_portfolio_one_page_sidebar && $has_sidebar ) {

			get_sidebar();
			get_template_part( $is_singular ? 'template-parts/content-single' : 'template-parts/content' );

		} elseif ( 'right_sidebar' === $rb_portfolio_one_page_sidebar && $has_sidebar ) {

			get_template_part( $is_singular ? 'template-parts/content-single' : 'template-parts/content' );
			get_sidebar();

			// Global (Customizer) sidebar control.
		} elseif ( 'left-sidebar' === $rb_portfolio_one_global_sidebar && $has_sidebar ) {

			get_sidebar();
			get_template_part( $is_singular ? 'template-parts/content-single' : 'template-parts/content' );

		} elseif ( 'right-sidebar' === $rb_portfolio_one_global_sidebar && $has_sidebar ) {

			get_template_part( $is_singular ? 'template-parts/content-single' : 'template-parts/content' );
			get_sidebar();

			// No sidebar.
		} else {

			get_template_part( $is_singular ? 'template-parts/content-single' : 'template-parts/content' );

		}
	}
	add_action( 'rb_portfolio_one_theme_option_sidebar', 'rb_portfolio_one_sidebar_choose' );
}

if ( ! function_exists( 'rb_portfolio_one_footer_output' ) ) {
	/**
	 * Footer Template
	 */
	function rb_portfolio_one_footer_output() {
		get_template_part( 'template-parts/footer/footer' );
	}
	add_action( 'rb_portfolio_one_footer', 'rb_portfolio_one_footer_output' );
}
