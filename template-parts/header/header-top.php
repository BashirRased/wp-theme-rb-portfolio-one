<?php
/**
 * The template for displaying website header top
 *
 * @package RB_Themes
 * @subpackage RB_Portfolio_One
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Get how many columns user selected.
$col_count = get_theme_mod( 'rbth_header_top_col', 'col-2' );
$col_count = (int) str_replace( 'col-', '', $col_count );
?>
<div class="header-top-wrap">
	<div class="container">
		<?php
		for ( $i = 1; $i <= $col_count; $i++ ) :
			$item        = get_theme_mod( "rbth_header_col_{$i}", 'email' );
			$item_col    = get_theme_mod( "rbth_header_col_{$i}_width", 'col-3' );
			$item_tc_col = get_theme_mod( "rbth_header_col_{$i}_tc_width", 'col-3' );
			$align       = get_theme_mod( "rbth_header_col_{$i}_align", 'left' );
			$align_tc    = get_theme_mod( "rbth_header_col_{$i}_tc_align", 'center' );
			$align_mc    = get_theme_mod( "rbth_header_col_{$i}_mc_align", 'center' );
			?>
			<div class="<?php echo esc_attr( 'rb-col rb-' . $item_col . ' rb-tc-' . $item_tc_col . ' rb-text-' . $align . ' rb-tc-text-' . $align_tc . ' rb-mc-text-' . $align_mc ); ?>">
				<?php
				switch ( $item ) {
					case 'phone':
						do_action( 'rbth_phone' );
						break;
					case 'email':
						do_action( 'rbth_email' );
						break;
					default:
						break;
				}
				?>
			</div>
		<?php endfor; ?>
	</div>
</div>