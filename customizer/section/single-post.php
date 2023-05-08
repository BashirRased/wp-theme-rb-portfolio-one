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
 * @version RB Portfolio One 1.1.5
 * @since RB Portfolio One 1.1.5
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

// rbpo_single_post_meta_switch
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbpo_single_post_meta_switch',
		'label'       => esc_html__( 'Post Meta On/Off', 'rb-portfolio-one' ),
		'section'     => 'rbpo_single_post',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-portfolio-one' ),
			'off' => esc_html__( 'Disable', 'rb-portfolio-one' ),
		],
	]
);

// rbpo_single_post_meta
new \Kirki\Field\Multicheck(
	[
		'settings'    => 'rbpo_single_post_meta',
		'label'       => esc_html__( 'Post Meta Item Select', 'rb-portfolio-one' ),
		'section'     => 'rbpo_single_post',
		'default'     => [
			'category-meta',
			'author-meta'
		],
		'multiple'    => -1,
		'choices'     => [
			'category-meta' => esc_html__( 'Category Meta', 'rb-portfolio-one' ),
			'author-meta' => esc_html__( 'Author Meta', 'rb-portfolio-one' ),
			'date-meta' => esc_html__( 'Date Meta', 'rb-portfolio-one' ),
			'comments-meta' => esc_html__( 'Comments Meta', 'rb-portfolio-one' ),
			'tag-meta' => esc_html__( 'Tag Meta', 'rb-portfolio-one' ),
			'edit-meta' => esc_html__( 'Post Edit Meta', 'rb-portfolio-one' ),
		],
		'active_callback'  => [
            [
                'setting'  => 'rbpo_single_post_meta_switch',
                'operator' => '===',
                'value'    => true,
            ],
        ]
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