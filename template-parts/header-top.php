<?php
/**
 * The template for displaying frontpage header top
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.1
 */

?>

<!--===== Header Top Area Strat Here =====-->
<div class="bashir-rased-header-top">
	<div class="container">
		<div class="row">
		
			<!-- Header Top Left Area Strat Here -->
			<div class="col-lg-6">
				<div class="bashir-rased-header-top-left">
					<span><i class="fas fa-phone"></i></span>
					<span>
						<?php get_template_part('homepage-sections/header/header-top','left'); ?>
					</span>         
				</div>
			</div>
			<!-- Header Top Left Area End Here -->
			
			<!-- Header Top Right Area Strat Here -->
			<div class="col-lg-6">
				<div class="bashir-rased-header-top-right float-right">
					<span><i class="far fa-envelope"></i></span>
					<span>
						<?php get_template_part('homepage-sections/header/header-top','right'); ?>
					</span>
				</div>
			</div>
			<!-- Header Top Right Area End Here -->
			
		</div><!-- row end -->
	</div><!-- container end -->
</div>
<!--===== Header Top Area End Here =====-->