<?php
/***********************************************
***** 404 Error Page Breadcrumb Start Here *****
***********************************************/
// rbpo_breadcrumbs_error_page
new \Kirki\Section(
	'rbpo_breadcrumbs_error_page',
	[
		'title'       => esc_html__( '404 Error Page', 'rb-portfolio-one' ),
		'panel'       => 'rbpo_breadcrumbs',
		'priority'    => 160,
	]
);

// rbpo_error_text
new \Kirki\Field\Text(
	[
		'settings' => 'rbpo_error_text',
		'label'    => esc_html__( '404 Error Page Breadcrumb Text', 'rb-portfolio-one' ),
        'default'  => esc_html__( '404 Error Page', 'rb-portfolio-one' ),
		'section'  => 'rbpo_breadcrumbs_error_page',
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

// rbpo_error_desc
new \Kirki\Field\Textarea(
	[
		'settings'    => 'rbpo_error_desc',
		'label'       => esc_html__( '404 Error Page Breadcrumbs Description', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_error_page',
		'default'     => esc_html__( 'This is a default value', 'rb-portfolio-one' ),
	]
);

// rbpo_error_image
new \Kirki\Field\Image(
	[
		'settings'    => 'rbpo_error_image',
		'label'       => esc_html__( '404 Error Page Breadcrumb Image', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_error_page',
		'default'     => esc_url_raw('https://pbs.twimg.com/profile_images/378800000761042858/b35868f03369aedf8540eeb754ccc22d_400x400.png'),'active_callback'  => [
            [
                'setting'  => 'rbpo_breadcrumbs_switch',
                'operator' => '===',
                'value'    => true,
            ],
        ]
	]
);

// rbpo_error_color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbpo_error_color',
		'label'       => __( '404 Error Page Background', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_error_page',
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