<?php
/****************************************
***** Archive Breadcrumb Start Here *****
****************************************/
// rbpo_breadcrumbs_archive
new \Kirki\Section(
	'rbpo_breadcrumbs_archive',
	[
		'title'       => esc_html__( 'Archive Page', 'rb-portfolio-one' ),
		'panel'       => 'rbpo_breadcrumbs',
		'priority'    => 160,
	]
);


// rbpo_archive_text
new \Kirki\Field\Text(
	[
		'settings' => 'rbpo_archive_text',
		'label'    => esc_html__( 'Archive Breadcrumbs Text', 'rb-portfolio-one' ),
        'default'  => esc_html__( 'Archive', 'rb-portfolio-one' ),
		'section'  => 'rbpo_breadcrumbs_archive',
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

// rbpo_archive_image
new \Kirki\Field\Image(
	[
		'settings'    => 'rbpo_archive_image',
		'label'       => esc_html__( 'Archive Breadcrumb Image', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_archive',
		'default'     => esc_url_raw('https://pbs.twimg.com/profile_images/378800000761042858/b35868f03369aedf8540eeb754ccc22d_400x400.png'),'active_callback'  => [
            [
                'setting'  => 'rbpo_breadcrumbs_switch',
                'operator' => '===',
                'value'    => true,
            ],
        ]
	]
);

// rbpo_archive_color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbpo_archive_color',
		'label'       => __( 'Archive Background', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs_archive',
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