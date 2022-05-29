<?php
/**
 * The template for displaying all archive post content.
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.4
 */

if(is_active_sidebar('bashir-rased-sidebar-right')){
    $bashir_rased_content_class = 'col-lg-8';
}
else {
    $bashir_rased_content_class = 'col-lg-12';
}

?>

<div class="<?php echo esc_attr(wp_kses_post($bashir_rased_content_class)); ?>" id="bashir-rased-page-content">
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
        'prev_text' => __('<i class="fas fa-chevron-left"></i>', 'bashir-rased'),
        'next_text' => __('<i class="fas fa-chevron-right"></i>', 'bashir-rased'),
    )); ?>


    </div>

</div>