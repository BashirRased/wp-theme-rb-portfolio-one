<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.1
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function bashir_rased_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'bashir-rased-columns-overlap',
				'label' => esc_html__( 'Overlap', 'bashir-rased' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'bashir-rased-border',
				'label' => esc_html__( 'Borders', 'bashir-rased' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'bashir-rased-border',
				'label' => esc_html__( 'Borders', 'bashir-rased' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'bashir-rased-border',
				'label' => esc_html__( 'Borders', 'bashir-rased' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'bashir-rased-image-frame',
				'label' => esc_html__( 'Frame', 'bashir-rased' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'bashir-rased-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'bashir-rased' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'bashir-rased-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'bashir-rased' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'bashir-rased-border',
				'label' => esc_html__( 'Borders', 'bashir-rased' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'bashir-rased-separator-thick',
				'label' => esc_html__( 'Thick', 'bashir-rased' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'bashir-rased-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'bashir-rased' ),
			)
		);
	}
	add_action( 'init', 'bashir_rased_register_block_styles' );
}
