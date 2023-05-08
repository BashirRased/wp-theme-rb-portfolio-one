<?php
/**
 * The template for displaying frontpage header top
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.5
 * @since RB Portfolio One 1.1.5
 */

$rbpo_phone_1 = get_theme_mod( 'rbpo_phone_1', __( '123 456 789', 'rb-portfolio-one' ) );
$rbpo_phone_2 = get_theme_mod( 'rbpo_phone_2', __( '123 456 789', 'rb-portfolio-one' ) );
$rbpo_email_1 = get_theme_mod( 'rbpo_email_1', __( 'email1@domain.extension', 'rb-portfolio-one' ) );
$rbpo_email_2 = get_theme_mod( 'rbpo_email_2', __( 'email2@domain.extension', 'rb-portfolio-one' ) );

?>

<!--===== Header Top Area Strat Here =====-->
<div class="header-top-area">
	<div class="container">
		<div class="row">

			<?php if ( isset ( $rbpo_phone_1 ) && !empty ( $rbpo_phone_1 ) ) : 
				if ( empty ( $rbpo_email_1 ) ) {
					$col_class = 'col-lg-12';
				}
				else {
					$col_class = 'col-lg-6';
				}
			?>
			<!-- Header Top Left Area Strat Here -->
			<div class="<?php echo esc_attr( $col_class ) ?>">
				<div class="header-top-left">
					<span><i class="fa-solid fa-phone"></i></span>
					<span>
						<?php
						echo esc_html ( $rbpo_phone_1 );
						if ( 'multi-number' == get_theme_mod( 'rbpo_phone_choice') ) {
							if ( isset ( $rbpo_phone_2 ) && !empty ( $rbpo_phone_2 ) ) {
								echo esc_html ( ', ', 'rb-portfolio-one' );
								echo esc_html ( $rbpo_phone_2 );
							}
						}						
						?>
					</span>
				</div>
			</div>
			<!-- Header Top Left Area End Here -->
			<?php endif; ?>
			
			<?php if ( isset ( $rbpo_email_1 ) && !empty ( $rbpo_email_1 ) ) : 
				if ( empty ( $rbpo_email_1 ) ) {
					$col_class = 'col-lg-12';
				}
				else {
					$col_class = 'col-lg-6';
				}
			?>
			<!-- Header Top Right Area Strat Here -->
			<div class="<?php echo esc_attr( $col_class ) ?>">
				<div class="header-top-right float-lg-end float-none">
					<span><i class="fa-solid fa-envelope"></i></span>
					<span>
						<?php
						if ( isset ( $rbpo_email_1 ) && !empty ( $rbpo_email_1 ) ) {
							echo sanitize_email ( $rbpo_email_1 );
						}
						if ( 'multi-email' == get_theme_mod( 'rbpo_email_choice') ) {
							if ( isset ( $rbpo_email_2 ) && !empty ( $rbpo_email_2 ) ) {
								echo esc_html ( ', ', 'rb-portfolio-one' );
								echo sanitize_email ( $rbpo_email_2 );
							}
						}						
						?>
					</span>
				</div>
			</div>
			<!-- Header Top Right Area End Here -->
			<?php endif; ?>
			
		</div><!-- .row -->
	</div><!-- .container -->
</div>
<!--===== Header Top Area End Here =====-->