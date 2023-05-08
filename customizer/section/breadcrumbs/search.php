<?php
/***************************************
***** Search Breadcrumb Start Here *****
***************************************/
// rbpo_breadcrumbs_search
new \Kirki\Section(
	'rbpo_breadcrumbs_search',
	[
		'title'       => esc_html__( 'Search Page', 'rb-portfolio-one' ),
		'panel'       => 'rbpo_breadcrumbs',
		'priority'    => 160,
	]
);

// rbpo_search_text
new \Kirki\Field\Text(
	[
		'settings' => 'rbpo_search_text',
		'label'    => esc_html__( 'Search Breadcrumb Text', 'rb-portfolio-one' ),
        'default'  => esc_html__( 'Search', 'rb-portfolio-one' ),
		'section'  => 'rbpo_breadcrumbs_search',
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

// rbpo_search_desc
new \Kirki\Field\Textarea(
	[
		'settings'    => 'rbpo_search_desc',
		'label'       => esc_html__( 'Search Page Breadcrumbs Description', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_search',
		'default'     => esc_html__( 'This is a default value', 'rb-portfolio-one' ),
	]
);

// rbpo_search_image
new \Kirki\Field\Image(
	[
		'settings'    => 'rbpo_search_image',
		'label'       => esc_html__( 'Search Breadcrumb Image', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_search',
		'default'     => esc_url_raw('https://pbs.twimg.com/profile_images/378800000761042858/b35868f03369aedf8540eeb754ccc22d_400x400.png'),'active_callback'  => [
            [
                'setting'  => 'rbpo_breadcrumbs_switch',
                'operator' => '===',
                'value'    => true,
            ],
        ]
	]
);

// rbpo_search_color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbpo_search_color',
		'label'       => __( 'Search Background', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_search',
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