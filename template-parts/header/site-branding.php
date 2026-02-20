<?php
/**
 * The template for displaying website header menu
 *
 * @package RB_Themes
 * @subpackage RB_Portfolio_One
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!--===== Header Menu Area Strat Here =====-->
<div class="header-site-branding-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h1 class="header-site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-site-title-link">
						<?php bloginfo( 'name' ); ?>
					</a>
				</h1>
			</div>
			<div class="col-lg-8 float-right">
				<div class="header-menu">
					<?php
						wp_nav_menu(
							array(
								'container'      => 'nav',
								'theme_location' => 'header_menu',
							)
						);
						?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--===== Header Menu Area End Here =====-->