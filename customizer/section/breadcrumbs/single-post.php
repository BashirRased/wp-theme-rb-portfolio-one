<?php
/*********************************************
***** Single Post Breadcrumbs Start Here *****
*********************************************/
// rbpo_breadcrumbs_single_post
new \Kirki\Section(
	'rbpo_breadcrumbs_single_post',
	[
		'title'       => esc_html__( 'Single Post', 'rb-portfolio-one' ),
		'panel'       => 'rbpo_breadcrumbs',
		'priority'    => 160,
	]
);

// rbpo_single_post_text
new \Kirki\Field\Text(
	[
		'settings' => 'rbpo_single_post_text',
		'label'    => esc_html__( 'Single Post Breadcrumb Text', 'rb-portfolio-one' ),
        'default'  => esc_html__( 'Single Post', 'rb-portfolio-one' ),
		'section'  => 'rbpo_breadcrumbs_single_post',
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

// rbpo_single_post_desc
new \Kirki\Field\Textarea(
	[
		'settings'    => 'rbpo_single_post_desc',
		'label'       => esc_html__( 'Single Post Breadcrumb Description', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_single_post',
		'default'     => esc_html__( 'This is a default value', 'rb-portfolio-one' ),
	]
);

// rbpo_single_post_image
new \Kirki\Field\Image(
	[
		'settings'    => 'rbpo_single_post_image',
		'label'       => esc_html__( 'Single Post Breadcrumb Image', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_single_post',
		'default'     => esc_url_raw('https://pbs.twimg.com/profile_images/378800000761042858/b35868f03369aedf8540eeb754ccc22d_400x400.png'),'active_callback'  => [
            [
                'setting'  => 'rbpo_breadcrumbs_switch',
                'operator' => '===',
                'value'    => true,
            ],
        ]
	]
);

// rbpo_single_post_color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbpo_single_post_color',
		'label'       => __( 'Single Post Background', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_single_post',
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