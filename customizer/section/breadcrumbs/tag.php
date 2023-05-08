<?php
/************************************
***** Tag Breadcrumb Start Here *****
************************************/
// rbpo_breadcrumbs_tag_page
new \Kirki\Section(
	'rbpo_breadcrumbs_tag_page',
	[
		'title'       => esc_html__( 'Tag Page', 'rb-portfolio-one' ),
		'panel'       => 'rbpo_breadcrumbs',
		'priority'    => 160,
	]
);

// rbpo_tag_text
new \Kirki\Field\Text(
	[
		'settings' => 'rbpo_tag_text',
		'label'    => esc_html__( 'Tag Breadcrumb Text', 'rb-portfolio-one' ),
        'default'  => esc_html__( 'Tag', 'rb-portfolio-one' ),
		'section'  => 'rbpo_breadcrumbs_tag_page',
		'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'rbpo_breadcrumbs_switch',
                'operator' => '===',
                'value'    => true,
            ],
        ]
	]
);

// rbpo_tag_desc
new \Kirki\Field\Textarea(
	[
		'settings'    => 'rbpo_tag_desc',
		'label'       => esc_html__( 'Tag Page Breadcrumbs Description', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_tag_page',
		'default'     => esc_html__( 'This is a default value', 'rb-portfolio-one' ),
	]
);

// rbpo_tag_image
new \Kirki\Field\Image(
	[
		'settings'    => 'rbpo_tag_image',
		'label'       => esc_html__( 'Tag Breadcrumb Image', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_tag_page',
		'default'     => esc_url_raw('https://pbs.twimg.com/profile_images/378800000761042858/b35868f03369aedf8540eeb754ccc22d_400x400.png'),'active_callback'  => [
            [
                'setting'  => 'rbpo_breadcrumbs_switch',
                'operator' => '===',
                'value'    => true,
            ],
        ]
	]
);

// rbpo_tag_color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbpo_tag_color',
		'label'       => __( 'Tag Background', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_tag_page',
		'default'     => '#0008DC',
        'active_callback'  => [
            [
                'setting'  => 'rbpo_breadcrumbs_switch',
                'operator' => '===',
                'value'    => true,
            ],
        ]
	]
);