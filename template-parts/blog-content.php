<?php
/**
 * The template for displaying all archive post content.
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

if(is_active_sidebar('bashir-rased-sidebar-right')){
    $bashir_rased_content_class = 'col-lg-8';
}
else {
    $bashir_rased_content_class = 'col-lg-12';
}

?>

<main id="primary" class="<?php echo esc_attr($bashir_rased_content_class); ?>" role="main">

    <?php if (is_search()) : if (have_posts()): ?>        
        <div class="page-title">
            <header class="search-page-header alignwide">

                <h2 class="search-page-header-title">
                    <?php
                    printf(
                        /* translators: %s: Search term. */
                        esc_html__('Results for "%s"','bashir-rased'),
                        '<span>'.esc_html(get_search_query()).'</span>'
                    );
                    ?>
                </h2><!-- .search-page-title -->

                <p class="search-result-count">
                <?php
                printf(
                    esc_html(
                        /* translators: %d: The number of search results. */
                        _n(
                            'We found %d result for your search.',
                            'We found %d results for your search.',
                            (int) $wp_query->found_posts,
                            'bashir-rased'
                        )
                    ),
                    (int) $wp_query->found_posts
                );
                ?>
                </p><!-- .search-result-count -->

            </header>
        </div>
    <?php endif; endif; ?>

    <?php if (is_archive()) : ?>
        <div class="page-title">
            <header class="archive-page-header alignwide">

                <h2 class="archive-page-header-title">
                    <?php
                    printf(
                        /* translators: %s: Search term. */
                        esc_html__('Archive of "%s"','bashir-rased'),
                        '<span>'.get_the_archive_title().'</span>'
                    );
                    ?>
                </h2><!-- .search-page-title -->

            </header>
        </div>
    <?php endif; ?>

    <div class="bashir-rased-post">       
    <?php 
    if (have_posts()): while (have_posts()): the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class("bashir-rased-post-item"); ?>>
    
        <div class="bashir-rased-single-post">
            <?php
                get_template_part('template-parts/blog-post-title');
                get_template_part('template-parts/blog-post-thumbnail');
                get_template_part('template-parts/blog-post-meta');
                get_template_part('template-parts/blog-post-content');        
            ?>
        </div>

    </article>

    <?php endwhile; endif; ?>

    <?php the_posts_pagination(array(
        'mid_size'  => 2,
        'prev_text' => '<i class="fa-solid fa-chevron-left"></i>',
        'next_text' => '<i class="fa-solid fa-chevron-right"></i>',
    )); ?>


    </div>

</main>