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
 * @version RB Portfolio One 1.1.9
 * @since RB Portfolio One 1.1.9
 */

/*********************************
***** Breadcrumbs Start Here *****
*********************************/
// rb_portfolio_one_breadcrumbs
new \Kirki\Section(
	'rb_portfolio_one_breadcrumbs',
	[
		'title'       => esc_html__( 'Breadcrumbs On/Off', 'rb-portfolio-one' ),
		'panel'       => 'rb_portfolio_one_customizer',
		'priority'    => 160,
	]
);

// rb_portfolio_one_breadcrumbs_switch
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rb_portfolio_one_breadcrumbs_switch',
		'label'       => esc_html__( 'Breadcrumbs On/Off', 'rb-portfolio-one' ),
		'section'     => 'rb_portfolio_one_breadcrumbs',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-portfolio-one' ),
			'off' => esc_html__( 'Disable', 'rb-portfolio-one' ),
		],
	]
);

// rb_portfolio_one_breadcrumbs_color
new \Kirki\Field\Color(
	[
		'settings'    => 'rb_portfolio_one_breadcrumbs_color',
		'label'       => __( 'Blog Page Background', 'rb-portfolio-one' ),
		'section'     => 'rb_portfolio_one_breadcrumbs',
		'default'     => '#007bff',
        'active_callback'  => [
            [
                'setting'  => 'rb_portfolio_one_breadcrumbs_switch',
                'operator' => '===',
                'value'    => true,
            ],
        ]
	]
);