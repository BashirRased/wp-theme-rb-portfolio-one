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
 * @version RB Portfolio One 1.1.6
 * @since RB Portfolio One 1.1.6
 */

// rbpo_footer
new \Kirki\Section(
	'rbpo_footer',
	[
		'title'       => esc_html__( 'Footer', 'rb-portfolio-one' ),
		'panel'       => 'rbpo_customizer',
		'priority'    => 160,
	]
);

// rbpo_copyright_text
new \Kirki\Field\Textarea(
	[
		'settings' => 'rbpo_copyright_text',
		'label'    => esc_html__( 'Copyright Text', 'rb-portfolio-one' ),
		'default'  => wp_kses_post( 'Copyright © By <a href="https://profiles.wordpress.org/bashirrased2017/">Bashir Rased</a>
		2022 | All Rights Reserved.', 'rb-portfolio-one' ),
		'section'  => 'rbpo_footer',
		'priority' => 10,
	]
);

// rbpo_poweredby_text
new \Kirki\Field\Textarea(
	[
		'settings' => 'rbpo_poweredby_text',
		'label'    => esc_html__( 'Power By Text', 'rb-portfolio-one' ),
		'default'  => wp_kses_post('Powered By <a href="https://profiles.wordpress.org/bashirrased2017/"> Bashir Rased. </a>', 'rb-portfolio-one' ),
		'section'  => 'rbpo_footer',
		'priority' => 10,
	]
);