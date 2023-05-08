<?php
/**
 * The file loading under kirki customizer
 *
 * @link https://kirki.org/docs/setup/panels-sections/
 * @link https://kirki.org/docs/controls/color/
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.4
 * @since RB Portfolio One 1.1.4
 */

// rbpo_theme_color
new \Kirki\Section(
	'rbpo_theme_color',
	[
		'title'       => esc_html__( 'Theme Color', 'rb-portfolio-one' ),
		'panel'       => 'rbpo_customizer',
		'priority'    => 160,
	]
);

// rbpo_primary_color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbpo_primary_color',
		'label'       => __( 'Primary Color', 'rb-portfolio-one' ),
		'section'     => 'rbpo_theme_color',
		'default'     => '#007bff',
	]
);

if ( !function_exists( 'rbpo_kirki_color' ) ) {
    function rbpo_kirki_color() {
        ?>
            <style>
                :root {
                    --primary-color: <?php echo sanitize_hex_color( get_theme_mod( 'rb_primary_color', '#007bff' ) ); ?>;
                }
            </style>
        <?php
    }
    add_action('wp_head', 'rbpo_kirki_color');
}