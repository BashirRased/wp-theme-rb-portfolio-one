<?php
/**
 * The template for displaying frontpage header top
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
	$bashir_rased_phone_1 = $bashir_rased_data['bashir-rased-phone-number-1'];
	$bashir_rased_phone_2 = $bashir_rased_data['bashir-rased-phone-number-2'];
	$bashir_rased_email_1 = $bashir_rased_data['bashir-rased-email-address-1'];
	$bashir_rased_email_2 = $bashir_rased_data['bashir-rased-email-address-2'];
}
	
if( empty($bashir_rased_phone_1) && empty($bashir_rased_phone_2) && empty($bashir_rased_email_1) && empty($bashir_rased_email_2) ):
		
	return;

	elseif( empty($bashir_rased_email_1) && empty($bashir_rased_email_2) ):

	get_template_part('homepage-sections/header/header-top','left');

elseif( empty($bashir_rased_phone_1) && empty($bashir_rased_phone_2) ):

	get_template_part('homepage-sections/header/header-top','right');

else:

?>

<!--===== Header Top Area Strat Here =====-->
<div class="bashir-rased-header-top">
	<div class="container">
		<div class="row">

			<!-- Header Top Left Area Strat Here -->
			<div class="col-lg-6">
				<div class="bashir-rased-header-top-left">
					<span><i class="fa-solid fa-phone"></i></span>
					<span>
						<?php
						if ( !empty($bashir_rased_phone_1) && empty($bashir_rased_phone_2) ) {
							printf(
								/* translators:
								%s: phone number 1
								*/
								'%s',
								esc_html($bashir_rased_phone_1,'bashir-rased')
							);
						}
						elseif ( empty($bashir_rased_phone_1) && !empty($bashir_rased_phone_2) ) {
							printf(
								/* translators:
								%s: phone number 2
								*/
								'%s',
								esc_html($bashir_rased_phone_2,'bashir-rased')
							);
						}
						elseif ( !empty($bashir_rased_phone_1) && !empty($bashir_rased_phone_2) ) {
							printf(
								/* translators:
								%1$s: phone number 1
								%2$s: , 
								%$3s: phone number 2
								*/
								'%1$s %2$s %3$s',
								esc_html($bashir_rased_phone_1,'bashir-rased'),
								esc_html(', ','bashir-rased'),
								esc_html($bashir_rased_phone_2,'bashir-rased')
							);
						}
						?>
					</span>
				</div>
			</div>
			<!-- Header Top Left Area End Here -->			
			
			<!-- Header Top Right Area Strat Here -->
			<div class="col-lg-6">
				<div class="bashir-rased-header-top-right float-end">
					<span><i class="fa-solid fa-envelope"></i></span>
					<span>
						<?php 
						if ( !empty($bashir_rased_email_1) && empty($bashir_rased_email_2) ) {
							printf(
								/* translators:
								%s: email address 1
								*/
								'%s',
								esc_html($bashir_rased_email_1,'bashir-rased')
							);
						}
						elseif ( empty($bashir_rased_email_1) && !empty($bashir_rased_email_2) ) {
							printf(
								/* translators:
								%s: email address 2
								*/
								'%s',
								esc_html($bashir_rased_email_2,'bashir-rased')
							);
						}
						elseif ( !empty($bashir_rased_email_1) && !empty($bashir_rased_email_2) ) {
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
						}
						?>
					</span>
				</div>
			</div>
			<!-- Header Top Right Area End Here -->
			
		</div><!-- row end -->
	</div><!-- container end -->
</div>
<!--===== Header Top Area End Here =====-->

<?php

endif;