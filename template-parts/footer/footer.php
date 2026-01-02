<?php
// Get how many columns user selected
$col_count = get_theme_mod( 'rbth_footer_col', 'col-2' );
$col_count = (int) str_replace( 'col-', '', $col_count );
?>
<footer class="footer-wrap">
	<div class="rb-container">
		<?php
		for ( $i = 1; $i <= $col_count; $i++ ) :
			$item  = get_theme_mod( "rbth_footer_{$i}", 'copyright' );
			$item_col   = get_theme_mod( "rbth_footer_{$i}_width", 'col-3' );
			$item_tc_col= get_theme_mod( "rbth_footer_{$i}_tc_width", 'col-3' );
			$align      = get_theme_mod( "rbth_footer_{$i}_align", 'left' );
			$align_tc   = get_theme_mod( "rbth_footer_{$i}_tc_align", 'center' );
			$align_mc   = get_theme_mod( "rbth_footer_{$i}_mc_align", 'center' );
			?>
			<div class="<?php echo esc_attr( 'rb-col rb-' . $item_col . ' rb-tc-' . $item_tc_col . ' rb-text-' . $align . ' rb-tc-text-' . $align_tc . ' rb-mc-text-' . $align_mc ); ?>">
				<?php
				switch ( $item ) {
					case 'copyright':
						do_action( 'rbth_copyright' );
						break;
					case 'poweredby':
						do_action( 'rbth_poweredby' );
						break;
					default:
						break;
				}
				?>
			</div>
		<?php endfor; ?>
	</div>
</footer>