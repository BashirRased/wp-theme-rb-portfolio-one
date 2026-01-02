<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RB_Themes
 */

get_header();
?>

<div id="page-content" class="error-page-wrap rb-p-tb-120">
	<main id="primary" class="rb-container">
		<section class="rb-col rb-col-6 error-page-container rb-p-tb-120">

			<header class="error-page-header">
				<h1 class="error-page-header-title">
					<?php esc_html_e('404', 'rb-portfolio-one'); ?>
				</h1>
				<h4 class="error-page-header-subtitle">
					<?php esc_html_e('Page Not Found', 'rb-portfolio-one'); ?>
				</h4>
			</header><!-- .error-page-header -->

			<div class="error-page-content">
				<p>
					<?php esc_html_e('Whoops, this is embarassing. Looks like the page you were looking for was not found.', 'rb-portfolio-one'); ?>
				</p>
				<a class="rb-portfolio-one-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php esc_html_e('Back To Home', 'rb-portfolio-one'); ?>
				</a>
			</div><!-- .error-page-body -->
		
		</section><!-- .error-404-page-content -->
	</main><!-- #primary -->
</div>
<?php
get_footer();