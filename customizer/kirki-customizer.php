<?php
/**
 * The file loading theme customizer options with kirki plugin
 *
 * @link https://kirki.org/docs/
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.9
 * @since RB Portfolio One 1.1.9
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

if ( class_exists( 'Kirki' ) ) {
	// rb_portfolio_one_customizer
	new \Kirki\Panel(
		'rb_portfolio_one_customizer',
		[
			'priority'    => 10,
			'title'       => esc_html__( 'RB Portfolio One Theme Options', 'rb-portfolio-one' )
		]
	);

	get_template_part( 'customizer/section/general' );
	get_template_part( 'customizer/section/header' );
	get_template_part( 'customizer/section/breadcrumbs' );
	get_template_part( 'customizer/section/blog-page' );
	get_template_part( 'customizer/section/single-page' );
	get_template_part( 'customizer/section/single-post' );
	get_template_part( 'customizer/section/single-attachment' );
	get_template_part( 'customizer/section/footer' );

	get_template_part( 'customizer/section/color' );
	get_template_part( 'customizer/section/typoghaphy' );
	
}