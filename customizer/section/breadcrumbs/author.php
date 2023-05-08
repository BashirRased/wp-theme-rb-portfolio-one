<?php
/****************************************
***** Author Breadcrumbs Start Here *****
****************************************/
// rbpo_breadcrumbs_author_page
new \Kirki\Section(
	'rbpo_breadcrumbs_author_page',
	[
		'title'       => esc_html__( 'Author Page', 'rb-portfolio-one' ),
		'panel'       => 'rbpo_breadcrumbs',
		'priority'    => 160,
	]
);

// rbpo_author_text
new \Kirki\Field\Text(
	[
		'settings' => 'rbpo_author_text',
		'label'    => esc_html__( 'Author Breadcrumbs Text', 'rb-portfolio-one' ),
        'default'  => esc_html__( 'Author', 'rb-portfolio-one' ),
		'section'  => 'rbpo_breadcrumbs_author_page',
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

// rbpo_author_desc
new \Kirki\Field\Textarea(
	[
		'settings'    => 'rbpo_author_desc',
		'label'       => esc_html__( 'Author Page Breadcrumbs Description', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_author_page',
		'default'     => esc_html__( 'This is a default value', 'rb-portfolio-one' ),
	]
);

// rbpo_author_image
new \Kirki\Field\Image(
	[
		'settings'    => 'rbpo_author_image',
		'label'       => esc_html__( 'Author Breadcrumb Image', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_author_page',
		'default'     => esc_url_raw('https://pbs.twimg.com/profile_images/378800000761042858/b35868f03369aedf8540eeb754ccc22d_400x400.png'),'active_callback'  => [
            [
                'setting'  => 'rbpo_breadcrumbs_switch',
                'operator' => '===',
                'value'    => true,
            ],
        ]
	]
);

// rbpo_author_color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbpo_author_color',
		'label'       => __( 'Author Background', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_author_page',
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