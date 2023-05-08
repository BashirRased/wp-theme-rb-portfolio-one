<?php
/**
 * The file loading under kirki customizer
 *
 * @link https://kirki.org/docs/setup/panels-sections/
 * @link https://kirki.org/docs/controls/switch/
 * @link https://kirki.org/docs/controls/text/
 * @link https://kirki.org/docs/controls/color/
 * @link https://kirki.org/docs/arguments/active_callback/
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.6
 * @since RB Portfolio One 1.1.6
 */

/*********************************
***** Breadcrumbs Start Here *****
*********************************/
// rbpo_breadcrumbs
new \Kirki\Section(
	'rbpo_breadcrumbs',
	[
		'title'       => esc_html__( 'Breadcrumbs On/Off', 'rb-portfolio-one' ),
		'panel'       => 'rbpo_customizer',
		'priority'    => 160,
	]
);

// rbpo_breadcrumbs_switch
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbpo_breadcrumbs_switch',
		'label'       => esc_html__( 'Breadcrumbs On/Off', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-portfolio-one' ),
			'off' => esc_html__( 'Disable', 'rb-portfolio-one' ),
		],
	]
);

// rbpo_breadcrumbs_color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbpo_breadcrumbs_color',
		'label'       => __( 'Blog Page Background', 'rb-portfolio-one' ),
		'section'     => 'rbpo_breadcrumbs',
		'default'     => '#007bff',
        'active_callback'  => [
            [
                'setting'  => 'rbpo_breadcrumbs_switch',
                'operator' => '===',
                'value'    => true,
            ],
        ]
	]
);