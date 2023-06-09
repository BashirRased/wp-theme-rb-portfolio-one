<?php
/**
 * The file loading under kirki customizer
 *
 * @link https://kirki.org/docs/setup/panels-sections/
 * @link https://kirki.org/docs/controls/switch/
 * @link @link https://kirki.org/docs/controls/multicheck/
 * @link https://kirki.org/docs/arguments/active_callback/
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.9
 * @since RB Portfolio One 1.1.9
 */

// rb_portfolio_one_single_post
new \Kirki\Section(
	'rb_portfolio_one_single_post',
	[
		'title'       => esc_html__( 'Single Post', 'rb-portfolio-one' ),
		'panel'       => 'rb_portfolio_one_customizer',
		'priority'    => 160,
	]
);

// rb_portfolio_one_single_post_thumbnail_switch
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rb_portfolio_one_single_post_thumbnail_switch',
		'label'       => esc_html__( 'Post Thumbnail On/Off', 'rb-portfolio-one' ),
		'section'     => 'rb_portfolio_one_single_post',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-portfolio-one' ),
			'off' => esc_html__( 'Disable', 'rb-portfolio-one' ),
		],
	]
);