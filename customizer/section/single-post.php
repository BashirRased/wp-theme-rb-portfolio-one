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
 * @version RB Portfolio One 1.1.6
 * @since RB Portfolio One 1.1.6
 */

// rbpo_single_post
new \Kirki\Section(
	'rbpo_single_post',
	[
		'title'       => esc_html__( 'Single Post', 'rb-portfolio-one' ),
		'panel'       => 'rbpo_customizer',
		'priority'    => 160,
	]
);

// rbpo_single_post_thumbnail_switch
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbpo_single_post_thumbnail_switch',
		'label'       => esc_html__( 'Post Thumbnail On/Off', 'rb-portfolio-one' ),
		'section'     => 'rbpo_single_post',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-portfolio-one' ),
			'off' => esc_html__( 'Disable', 'rb-portfolio-one' ),
		],
	]
);