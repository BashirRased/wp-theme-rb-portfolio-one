<?php
/*******************************************
***** Blog Page Breadcrumbs Start Here *****
*******************************************/
// rbpo_breadcrumbs_blog
new \Kirki\Section(
	'rbpo_breadcrumbs_blog',
	[
		'title'       => esc_html__( 'Blog Page', 'rb-portfolio-one' ),
		'panel'       => 'rbpo_breadcrumbs',
		'priority'    => 160,
	]
);

// rbpo_blog_page_text
new \Kirki\Field\Text(
	[
		'settings' => 'rbpo_blog_page_text',
		'label'    => esc_html__( 'Blog Page Breadcrumb Text', 'rb-portfolio-one' ),
        'default'  => esc_html__( 'Blog Page', 'rb-portfolio-one' ),
		'section'  => 'rbpo_breadcrumbs_blog',
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

// rbpo_blog_page_desc
new \Kirki\Field\Textarea(
	[
		'settings'    => 'rbpo_blog_page_desc',
		'label'       => esc_html__( 'Blog Page Breadcrumb Description', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_blog',
		'default'     => esc_html__( 'This is a default value', 'rb-portfolio-one' ),
	]
);

// rbpo_blog_page_image
new \Kirki\Field\Image(
	[
		'settings'    => 'rbpo_blog_page_image',
		'label'       => esc_html__( 'Blog Page Breadcrumb Image', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_blog',
		'default'     => esc_url_raw('https://pbs.twimg.com/profile_images/378800000761042858/b35868f03369aedf8540eeb754ccc22d_400x400.png'),'active_callback'  => [
            [
                'setting'  => 'rbpo_breadcrumbs_switch',
                'operator' => '===',
                'value'    => true,
            ],
        ]
	]
);

// rbpo_blog_page_color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbpo_blog_page_color',
		'label'       => __( 'Blog Page Background', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_blog',
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