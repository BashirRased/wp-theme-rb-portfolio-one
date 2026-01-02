<?php
/**
 * The template for displaying website header menu
 *
 * @package RB_Themes
 */
?>

<!--===== Header Menu Area Strat Here =====-->
<div class="header-site-branding-wrap">
	<div class="rb-container">
		<div class="rb-col rb-col-2">
			<h1 class="header-site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-site-title-link">
					<?php bloginfo( 'name' ); ?>
				</a>
			</h1>
		</div>
		<div class="rb-col rb-col-4 rb-text-right rb-p-none">
			<div class="header-menu">
				<?php
					wp_nav_menu( array(
						'container' => 'nav',
						'theme_location' => 'header_menu',
					)); 
				?>
			</div>
		</div>
	</div>
</div>
<!--===== Header Menu Area End Here =====-->