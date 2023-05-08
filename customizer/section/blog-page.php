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
 * @version RB Portfolio One 1.1.4
 * @since RB Portfolio One 1.1.4
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

// rbpo_blog_page_post_meta_switch
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbpo_blog_page_post_meta_switch',
		'label'       => esc_html__( 'Post Meta On/Off', 'rb-portfolio-one' ),
		'section'     => 'rbpo_blog_page',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-portfolio-one' ),
			'off' => esc_html__( 'Disable', 'rb-portfolio-one' ),
		],
	]
);

// rbpo_blog_page_post_meta
new \Kirki\Field\Multicheck(
	[
		'settings'    => 'rbpo_blog_page_post_meta',
		'label'       => esc_html__( 'Post Meta Item Select', 'rb-portfolio-one' ),
		'section'     => 'rbpo_blog_page',
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
                'setting'  => 'rbpo_blog_page_post_meta_switch',
                'operator' => '===',
                'value'    => true,
            ],
        ]
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