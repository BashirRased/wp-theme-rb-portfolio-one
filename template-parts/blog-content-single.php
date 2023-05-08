<?php
/**
 * The template for displaying all single post content.
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

    <div class="bashir-rased-single-post-area">       
    <?php 
    if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="bashir-rased-single-post">
            <?php
                get_template_part('template-parts/blog-post-title');
                get_template_part('template-parts/blog-post-thumbnail');
                get_template_part('template-parts/blog-post-meta');
                get_template_part('template-parts/blog-post-content');        
            ?>
        </div>

        <div class="bashir-rased-single-post-comment-area">
            <?php
            // If comments are open or there is at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
            ?>
        </div>

    </article>

    <?php endwhile; endif; ?>
    </div>

</main>