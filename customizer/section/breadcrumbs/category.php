<?php
/*****************************************
***** Category Breadcrumb Start Here *****
*****************************************/
// rbpo_breadcrumbs_category_page
new \Kirki\Section(
	'rbpo_breadcrumbs_category_page',
	[
		'title'       => esc_html__( 'Category Page', 'rb-portfolio-one' ),
		'panel'       => 'rbpo_breadcrumbs',
		'priority'    => 160,
	]
);


// rbpo_category_text
new \Kirki\Field\Text(
	[
		'settings' => 'rbpo_category_text',
		'label'    => esc_html__( 'Category Breadcrumb Text', 'rb-portfolio-one' ),
        'default'  => esc_html__( 'Category', 'rb-portfolio-one' ),
		'section'  => 'rbpo_breadcrumbs_category_page',
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

// rbpo_category_desc
new \Kirki\Field\Textarea(
	[
		'settings'    => 'rbpo_category_desc',
		'label'       => esc_html__( 'Category Page Breadcrumbs Description', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_category_page',
		'default'     => esc_html__( 'This is a default value', 'rb-portfolio-one' ),
	]
);

// rbpo_category_image
new \Kirki\Field\Image(
	[
		'settings'    => 'rbpo_category_image',
		'label'       => esc_html__( 'Category Breadcrumb Image', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_category_page',
		'default'     => esc_url_raw('https://pbs.twimg.com/profile_images/378800000761042858/b35868f03369aedf8540eeb754ccc22d_400x400.png'),'active_callback'  => [
            [
                'setting'  => 'rbpo_breadcrumbs_switch',
                'operator' => '===',
                'value'    => true,
            ],
        ]
	]
);

// rbpo_category_color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbpo_category_color',
		'label'       => __( 'Category Background', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_category_page',
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