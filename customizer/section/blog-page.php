<?php
/**
 * The file loading under kirki customizer
 *
 * @link https://kirki.org/docs/setup/panels-sections/
 * @link https://kirki.org/docs/controls/switch/
 * @link https://kirki.org/docs/controls/number/
 * @link https://kirki.org/docs/controls/multicheck/
 * @link https://kirki.org/docs/arguments/active_callback/
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.6
 * @since RB Portfolio One 1.1.6
 */

// rbpo_blog_page
new \Kirki\Section(
	'rbpo_blog_page',
	[
		'title'       => esc_html__( 'Blog Page', 'rb-portfolio-one' ),
		'panel'       => 'rbpo_customizer',
		'priority'    => 160,
	]
);

// rbpo_blog_page_thumbnail_switch
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbpo_blog_page_thumbnail_switch',
		'label'       => esc_html__( 'Post Thumbnail On/Off', 'rb-portfolio-one' ),
		'section'     => 'rbpo_blog_page',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-portfolio-one' ),
			'off' => esc_html__( 'Disable', 'rb-portfolio-one' ),
		],
	]
);

// rbpo_excerpt_switch
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbpo_excerpt_switch',
		'label'       => esc_html__( 'Post Excerpt On/Off', 'rb-portfolio-one' ),
		'section'     => 'rbpo_blog_page',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-portfolio-one' ),
			'off' => esc_html__( 'Disable', 'rb-portfolio-one' ),
		],
	]
);

// rbpo_excerpt_word
new \Kirki\Field\Number(
	[
		'settings' => 'rbpo_excerpt_word',
		'label'    => esc_html__( 'Post Excerpt Words', 'rb-portfolio-one' ),
		'section'  => 'rbpo_blog_page',
		'default'  => 30,
		'choices'  => [
			'min'  => 10,
			'max'  => 50,
			'step' => 1,
		],
        'active_callback'  => [
            [
                'setting'  => 'rbpo_excerpt_switch',
                'operator' => '===',
                'value'    => true,
            ],
        ]
	]
);

// rbpo_read_more_btn_switch
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbpo_read_more_btn_switch',
		'label'       => esc_html__( 'Read More Button On/Off', 'rb-portfolio-one' ),
		'section'     => 'rbpo_blog_page',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-portfolio-one' ),
			'off' => esc_html__( 'Disable', 'rb-portfolio-one' ),
		],
	]
);