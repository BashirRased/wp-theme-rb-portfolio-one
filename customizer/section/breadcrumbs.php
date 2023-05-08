<?php
/**
 * The file loading under kirki customizer
 *
 * @link https://kirki.org/docs/setup/panels-sections/
 * @link https://kirki.org/docs/controls/switch/
 * @link https://kirki.org/docs/controls/text/
 * @link https://kirki.org/docs/controls/color/
 * @link https://kirki.org/docs/arguments/active_callback/
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.4
 * @since RB Portfolio One 1.1.4
 */

// rbpo_breadcrumbs
new \Kirki\Panel(
	'rbpo_breadcrumbs',
	[
		'title'       => esc_html__( 'Breadcrumbs', 'rb-portfolio-one' ),
		'panel'       => 'rbpo_customizer',
		'priority'    => 10,
	]
);

/***************************************
***** Breadcrumb Switch Start Here *****
***************************************/
// rbpo_breadcrumbs_switch
new \Kirki\Section(
	'rbpo_breadcrumbs_switch',
	[
		'title'       => esc_html__( 'Breadcrumbs On/Off', 'rb-portfolio-one' ),
		'panel'       => 'rbpo_breadcrumbs',
		'priority'    => 160,
	]
);

// rbpo_breadcrumbs_switch
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbpo_breadcrumbs_switch',
		'label'       => esc_html__( 'Breadcrumbs On/Off', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_switch',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-portfolio-one' ),
			'off' => esc_html__( 'Disable', 'rb-portfolio-one' ),
		],
	]
);

get_template_part( 'customizer/section/breadcrumbs/blog-page' );
get_template_part( 'customizer/section/breadcrumbs/single-page' );
get_template_part( 'customizer/section/breadcrumbs/single-post' );
get_template_part( 'customizer/section/breadcrumbs/author' );
get_template_part( 'customizer/section/breadcrumbs/search' );
get_template_part( 'customizer/section/breadcrumbs/404' );
get_template_part( 'customizer/section/breadcrumbs/archive' );
get_template_part( 'customizer/section/breadcrumbs/category' );
get_template_part( 'customizer/section/breadcrumbs/tag' );