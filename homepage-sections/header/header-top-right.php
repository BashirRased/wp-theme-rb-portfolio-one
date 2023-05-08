<?php
/**
 * The template for displaying frontpage header top section
 *
 * Part of header top section right
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */
 
$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
	$bashir_rased_email_1 = $bashir_rased_data['bashir-rased-email-address-1'];
	
	$bashir_rased_email_2 = $bashir_rased_data['bashir-rased-email-address-2'];
}

if(!empty($bashir_rased_email_1) && empty($bashir_rased_email_2)): ?>

<!--===== Header Top Area Strat Here =====-->
<div class="bashir-rased-header-top">
	<div class="container">
		<div class="row">

			<!-- Header Top Left Area Strat Here -->
			<div class="col-lg-12">
				<div class="bashir-rased-header-top-left">
					<span><i class="fa-solid fa-envelope"></i></span>
					<span>
						<?php
						printf(
							/* translators:
							%s: email address 1
							*/
							'%s',
							esc_html($bashir_rased_email_1,'bashir-rased')
						);
						?>
					</span>
				</div>
			</div>
			<!-- Header Top Left Area End Here -->
			
		</div><!-- row end -->
	</div><!-- container end -->
</div>
<!--===== Header Top Area End Here =====-->

<?php elseif( empty($bashir_rased_email_1) && !empty($bashir_rased_email_2) ): ?>

<!--===== Header Top Area Strat Here =====-->
<div class="bashir-rased-header-top">
	<div class="container">
		<div class="row">

			<!-- Header Top Left Area Strat Here -->
			<div class="col-lg-12">
				<div class="bashir-rased-header-top-left">
					<span><i class="fa-solid fa-envelope"></i></span>
					<span>
						<?php
						printf(
							/* translators:
							%s: email address 2
							*/
							'%s',
							esc_html($bashir_rased_email_2,'bashir-rased')
						);
						?>
					</span>
				</div>
			</div>
			<!-- Header Top Left Area End Here -->
			
		</div><!-- row end -->
	</div><!-- container end -->
</div>
<!--===== Header Top Area End Here =====-->

<?php elseif( !empty($bashir_rased_email_1) && !empty($bashir_rased_email_2) ): ?>

<!--===== Header Top Area Strat Here =====-->
<div class="bashir-rased-header-top">
	<div class="container">
		<div class="row">

			<!-- Header Top Left Area Strat Here -->
			<div class="col-lg-12">
				<div class="bashir-rased-header-top-left">
					<span><i class="fa-solid fa-envelope"></i></span>
					<span>
						<?php
						printf(
							/* translators:
							%1$s: email address 1
							%2$s: , 
							%$3s: email address 2
							*/
							'%1$s %2$s %3$s',
							esc_html($bashir_rased_email_1,'bashir-rased'),
							esc_html(', ','bashir-rased'),
							esc_html($bashir_rased_email_2,'bashir-rased')
						);
						?>
					</span>
				</div>
			</div>
			<!-- Header Top Left Area End Here -->
			
		</div><!-- row end -->
	</div><!-- container end -->
</div>
<!--===== Header Top Area End Here =====-->

<?php endif; ?>