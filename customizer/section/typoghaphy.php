<?php
/**
 * The file loading under kirki customizer
 *
 * @link https://kirki.org/docs/controls/typography/
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.7
 * @since RB Portfolio One 1.1.7
 */

// rb_portfolio_one_typography
new \Kirki\Section(
	'rb_portfolio_one_typography',
	[
		'title'       => esc_html__( 'Typography', 'rb-portfolio-one' ),
		'panel'       => 'rb_portfolio_one_customizer',
		'priority'    => 160,
	]
);

// rb_portfolio_one_body_text
new \Kirki\Field\Typography(
	[
		'settings'    => 'rb_portfolio_one_body_text',
		'label'       => __( 'Body Text', 'rb-portfolio-one' ),
		'section'     => 'rb_portfolio_one_typography',
        'choices' => [
            'fonts' => [
                'google'   => [ 'popularity', 50 ],
                'standard' => [ 'serif', 'sans-serif' ],
            ],
        ],
		'default'     => [
			'font-family'     => 'Roboto',
			'font-weight'     => '400',
            'font-style'      => 'regular',
			'color'           => '#000000',
			'font-size'       => '16px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'left',
		],
        'output'      => [
			[
				'element' => 'body',
			],
		]
	]
);

// rb_h1_text
new \Kirki\Field\Typography(
	[
		'settings'    => 'rb_h1_text',
		'label'       => __( 'H1 Text', 'rb-portfolio-one' ),
		'section'     => 'rb_portfolio_one_typography',
        'choices' => [
            'fonts' => [
                'google'   => [ 'popularity', 50 ],
                'standard' => [ 'serif', 'sans-serif' ],
            ],
        ],
		'default'     => [
			'font-family'     => 'Roboto',
			'font-weight'     => '700',
			'color'           => '#000000',
			'font-size'       => '40px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'left',
		],
        'output'      => [
			[
				'element' => 'h1',
			],
		]
	]
);

// rb_h2_text
new \Kirki\Field\Typography(
	[
		'settings'    => 'rb_h2_text',
		'label'       => __( 'H2 Text', 'rb-portfolio-one' ),
		'section'     => 'rb_portfolio_one_typography',
        'choices' => [
            'fonts' => [
                'google'   => [ 'popularity', 50 ],
                'standard' => [ 'serif', 'sans-serif' ],
            ],
        ],
		'default'     => [
			'font-family'     => 'Roboto',
			'font-weight'     => '700',
			'color'           => '#000000',
			'font-size'       => '35px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'left',
		],
        'output'      => [
			[
				'element' => 'h2',
			],
		]
	]
);

// rb_h3_text
new \Kirki\Field\Typography(
	[
		'settings'    => 'rb_h3_text',
		'label'       => __( 'H3 Text', 'rb-portfolio-one' ),
		'section'     => 'rb_portfolio_one_typography',
        'choices' => [
            'fonts' => [
                'google'   => [ 'popularity', 50 ],
                'standard' => [ 'serif', 'sans-serif' ],
            ],
        ],
		'default'     => [
			'font-family'     => 'Roboto',
			'font-weight'     => '700',
			'color'           => '#000000',
			'font-size'       => '30px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'left',
		],
        'output'      => [
			[
				'element' => 'h3',
			],
		]
	]
);

// rb_h4_text
new \Kirki\Field\Typography(
	[
		'settings'    => 'rb_h4_text',
		'label'       => __( 'H4 Text', 'rb-portfolio-one' ),
		'section'     => 'rb_portfolio_one_typography',
        'choices' => [
            'fonts' => [
                'google'   => [ 'popularity', 50 ],
                'standard' => [ 'serif', 'sans-serif' ],
            ],
        ],
		'default'     => [
			'font-family'     => 'Roboto',
			'font-weight'     => '700',
			'color'           => '#000000',
			'font-size'       => '25px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'left',
		],
        'output'      => [
			[
				'element' => 'h4',
			],
		]
	]
);

// rb_h5_text
new \Kirki\Field\Typography(
	[
		'settings'    => 'rb_h5_text',
		'label'       => __( 'H5 Text', 'rb-portfolio-one' ),
		'section'     => 'rb_portfolio_one_typography',
        'choices' => [
            'fonts' => [
                'google'   => [ 'popularity', 50 ],
                'standard' => [ 'serif', 'sans-serif' ],
            ],
        ],
		'default'     => [
			'font-family'     => 'Roboto',
			'font-weight'     => '700',
			'color'           => '#000000',
			'font-size'       => '22px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'left',
		],
        'output'      => [
			[
				'element' => 'h5',
			],
		]
	]
);

// rb_h6_text
new \Kirki\Field\Typography(
	[
		'settings'    => 'rb_h6_text',
		'label'       => __( 'H6 Text', 'rb-portfolio-one' ),
		'section'     => 'rb_portfolio_one_typography',
        'choices' => [
            'fonts' => [
                'google'   => [ 'popularity', 50 ],
                'standard' => [ 'serif', 'sans-serif' ],
            ],
        ],
		'default'     => [
			'font-family'     => 'Roboto',
			'font-weight'     => '700',
			'color'           => '#000000',
			'font-size'       => '20px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'left',
		],
        'output'      => [
			[
				'element' => 'h6',
			],
		]
	]
);