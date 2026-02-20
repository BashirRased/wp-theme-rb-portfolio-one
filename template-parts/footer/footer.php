<?php
/**
 * The template for displaying website footer
 *
 * @package RB_Themes
 * @subpackage RB_Portfolio_One
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// Get how many columns user selected.
$col_count = get_theme_mod( 'rbth_footer_col', 'col-2' );
$col_count = (int) str_replace( 'col-', '', $col_count );
?>
<footer class="footer-wrap">
	<div class="container">
		<?php
		$start_year   = 2018;
		$current_year = (int) date_i18n( 'Y' );
		$year_display = ( $start_year === $current_year )
			? $current_year
			: $start_year . '-' . $current_year;
		?>
		<div class="row">
			<div class="col-lg-6">
				<div class="rb-footer-text-left">
					<p>
						<?php
						printf(
							/* translators: 1: Author link, 2: Copyright years */
							esc_html__( 'Copyright © By %1$s %2$s | All Rights Reserved.', 'rb-portfolio-one' ),
							'<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html( get_bloginfo( 'name' ) ) . '</a>',
							esc_html( $year_display )
						);
						?>
					</p>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="rb-footer-text-right float-end">
					<p>
						<?php
						printf(
							/* translators: %s: Site link */
							esc_html__( 'Powered By %s.', 'rb-portfolio-one' ),
							'<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html( get_bloginfo( 'name' ) ) . '</a>'
						);
						?>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>