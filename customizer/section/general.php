<?php
/**
 * The file loading under kirki customizer
 *
 * @link https://kirki.org/docs/setup/panels-sections/
 * @link https://kirki.org/docs/controls/switch/
 * @link https://kirki.org/docs/controls/select/
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.7
 * @since RB Portfolio One 1.1.7
 */

// rb_portfolio_one_general
new \Kirki\Section(
	'rb_portfolio_one_general',
	[
		'title'       => esc_html__( 'General', 'rb-portfolio-one' ),
		'panel'       => 'rb_portfolio_one_customizer',
		'priority'    => 160,
	]
);

// rb_portfolio_one_preloader_switch
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rb_portfolio_one_preloader_switch',
		'label'       => esc_html__( 'Preloader On/Off', 'rb-portfolio-one' ),
		'section'     => 'rb_portfolio_one_general',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-portfolio-one' ),
			'off' => esc_html__( 'Disable', 'rb-portfolio-one' ),
		],
	]
);

// rb_portfolio_one_sidebar_choice
new \Kirki\Field\Select(
	[
		'settings'    => 'rb_portfolio_one_sidebar_choice',
		'label'       => esc_html__( 'Sidebar Choice', 'rb-portfolio-one' ),
		'section'     => 'rb_portfolio_one_general',
		'default'     => 'no-sidebar',
		'choices'     => [
			'no-sidebar' => esc_html__( 'No Sidebar', 'rb-portfolio-one' ),
			'left-sidebar' => esc_html__( 'Left Sidebar', 'rb-portfolio-one' ),
			'right-sidebar' => esc_html__( 'Right Sidebar', 'rb-portfolio-one' ),
		],
	]
);

// rb_portfolio_one_scroll_to_top_switch
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rb_portfolio_one_scroll_to_top_switch',
		'label'       => esc_html__( 'Scroll To Top On/Off', 'rb-portfolio-one' ),
		'section'     => 'rb_portfolio_one_general',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-portfolio-one' ),
			'off' => esc_html__( 'Disable', 'rb-portfolio-one' ),
		],
	]
);