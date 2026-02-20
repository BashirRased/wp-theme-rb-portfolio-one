<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB_Themes
 * @subpackage RB_Portfolio_One
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div id="page-content" class="page-content">
	<div class="container">
		<div class="row">            
			<?php do_action( 'rb_portfolio_one_theme_option_sidebar' ); ?>
		</div><!-- .row -->
	</div><!-- .container -->
</div>

<?php get_footer(); ?>