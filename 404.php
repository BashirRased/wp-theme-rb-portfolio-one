<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.5
 * @since RB Portfolio One 1.1.5
 */

get_header();

?>

<div id="page-content" class="page-content">
    <div class="container">
        <div class="row">

            <main id="primary" class="col-lg-12">

                <section class="error-404-page-content">

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
                        <a class="rbpo-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php esc_html_e('Back To Home', 'rb-portfolio-one'); ?>
                        </a>
                    </div><!-- .error-page-body -->
                
                </section><!-- .error-404-page-content -->

            </main><!-- #primary -->
            
        </div><!-- .row -->        
    </div><!-- .container -->
</div>
<?php
get_footer();