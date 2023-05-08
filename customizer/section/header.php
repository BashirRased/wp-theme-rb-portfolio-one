<?php
/**
 * The file loading under kirki customizer
 *
 * @link https://kirki.org/docs/setup/panels-sections/
 * @link https://kirki.org/docs/controls/switch/
 * @link https://kirki.org/docs/controls/select/
 * @link https://kirki.org/docs/controls/text/
 * @link https://kirki.org/docs/arguments/active_callback/
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.4
 * @since RB Portfolio One 1.1.4
 */

// rbpo_header
new \Kirki\Section(
	'rbpo_header',
	[
		'title'       => esc_html__( 'Header', 'rb-portfolio-one' ),
		'panel'       => 'rbpo_customizer',
		'priority'    => 160,
	]
);

// rbpo_header_topbar_switch
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbpo_header_topbar_switch',
		'label'       => esc_html__( 'Header Topbar On/Off', 'rb-portfolio-one' ),
		'section'     => 'rbpo_header',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-portfolio-one' ),
			'off' => esc_html__( 'Disable', 'rb-portfolio-one' ),
		],
	]
);

// rbpo_phone_choice
new \Kirki\Field\Select(
	[
		'settings'    => 'rbpo_phone_choice',
		'label'       => esc_html__( 'Phone Number Choice', 'rb-portfolio-one' ),
		'section'     => 'rbpo_header',
		'default'     => 'single-number',
		'choices'     => [
			'single-number' => esc_html__( 'Single Number', 'rb-portfolio-one' ),
			'multi-number' => esc_html__( 'Multi Number', 'rb-portfolio-one' ),
		],
        'active_callback'  => [
            [
                'setting'  => 'rbpo_header_topbar_switch',
                'operator' => '===',
                'value'    => true,
            ],
        ]
	]
);

// rbpo_phone_1
new \Kirki\Field\Text(
	[
		'settings' => 'rbpo_phone_1',
		'label'    => esc_html__( 'Phone Number 1', 'rb-portfolio-one' ),
		'section'  => 'rbpo_header',
		'default'  => esc_html__( '123 456 789', 'rb-portfolio-one' ),
		'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'rbpo_header_topbar_switch',
                'operator' => '===',
                'value'    => true,
            ],
        ]
	]
);

// rbpo_phone_2
new \Kirki\Field\Text(
	[
		'settings' => 'rbpo_phone_2',
		'label'    => esc_html__( 'Phone Number 2', 'rb-portfolio-one' ),
		'section'  => 'rbpo_header',
		'default'  => esc_html__( '123 456 789', 'rb-portfolio-one' ),
		'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'rbpo_phone_choice',
                'operator' => '===',
                'value'    => 'multi-number',
            ],
        ]
	]
);

// rbpo_email_choice
new \Kirki\Field\Select(
	[
		'settings'    => 'rbpo_email_choice',
		'label'       => esc_html__( 'E-mail Choice', 'rb-portfolio-one' ),
		'section'     => 'rbpo_header',
		'default'     => 'single-email',
		'choices'     => [
			'single-email' => esc_html__( 'Single E-mail', 'rb-portfolio-one' ),
			'multi-email' => esc_html__( 'Multi E-mail', 'rb-portfolio-one' ),
		],
        'active_callback'  => [
            [
                'setting'  => 'rbpo_header_topbar_switch',
                'operator' => '===',
                'value'    => true,
            ],
        ]
	]
);

// rbpo_email_1
new \Kirki\Field\Text(
	[
		'settings' => 'rbpo_email_1',
		'label'    => esc_html__( 'E-mail Address 1', 'rb-portfolio-one' ),
		'section'  => 'rbpo_header',
		'default'  => esc_html__( 'email1@domain.extension', 'rb-portfolio-one' ),
		'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'rbpo_header_topbar_switch',
                'operator' => '===',
                'value'    => true,
            ],
        ]
	]
);

// rbpo_email_2
new \Kirki\Field\Text(
	[
		'settings' => 'rbpo_email_2',
		'label'    => esc_html__( 'E-mail Address 2', 'rb-portfolio-one' ),
		'section'  => 'rbpo_header',
		'default'  => esc_html__( 'email2@domain.extension', 'rb-portfolio-one' ),
		'priority' => 10,
        'active_callback'  => [
            [
                'setting'  => 'rbpo_email_choice',
                'operator' => '===',
                'value'    => 'multi-email',
            ],
        ]
	]
);

// rbpo_header_transparent
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbpo_header_transparent',
		'label'       => esc_html__( 'Header Transparent On/Off', 'rb-portfolio-one' ),
		'section'     => 'rbpo_header',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-portfolio-one' ),
			'off' => esc_html__( 'Disable', 'rb-portfolio-one' ),
		],
	]
);

// rbpo_header_fixed
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbpo_header_fixed',
		'label'       => esc_html__( 'Header Fixed On/Off', 'rb-portfolio-one' ),
		'section'     => 'rbpo_header',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-portfolio-one' ),
			'off' => esc_html__( 'Disable', 'rb-portfolio-one' ),
		],
	]
);