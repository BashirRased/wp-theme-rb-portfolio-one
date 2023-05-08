<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

get_header();
get_template_part('template-parts/breadcrumbs');

?>

<div id="bashir-rased-page-content" class="error-404-page">
    <div class="container">
        <div class="row">
            <?php
				if(is_active_sidebar('bashir-rased-sidebar-right')){
					$bashir_rased_page_content_class = 'col-lg-8';
				}
				else {
					$bashir_rased_page_content_class = 'col-lg-12';
				}
			?>

            <main id="primary" class="<?php echo esc_attr($bashir_rased_page_content_class); ?>">

                <section class="error-404-page-content">

                    <header class="error-page-header alignwide">
                        <h1 class="error-page-header-title">
                            <?php esc_html_e('404', 'bashir-rased'); ?>
                        </h1>
                        <h4 class="error-page-header-subtitle">
                            <?php esc_html_e('Page Not Found', 'bashir-rased'); ?>
                        </h4>
                    </header><!-- .error-page-header -->

                    <div class="error-page-body">
                        <p>
                            <?php esc_html_e('The requested URL was not found. Something was wrong, please try again. Search you correct keywords or go to home page.', 'bashir-rased'); ?>
                        </p>
                        <?php get_search_form(); ?>
                        <a class="error-btn" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php esc_html_e('Go To Home Page', 'bashir-rased'); ?>
                        </a>
                    </div><!-- .error-page-body -->
                
                </section><!-- .error-404-page-content -->

            </main><!-- #primary -->

            <?php
			if(is_active_sidebar('bashir-rased-sidebar-right')){
				get_sidebar();
			}
			?>
        </div><!-- row end -->        
    </div><!-- container end -->
</div>
<?php
get_footer();