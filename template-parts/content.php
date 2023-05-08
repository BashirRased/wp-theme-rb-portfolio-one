<?php
/**
 * The template for displaying all archive post content.
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.6
 * @since RB Portfolio One 1.1.6
 */


$rbpo_global_sidebar = function_exists( 'get_field' ) ? get_field( 'sidebar_choose' ) : 'no_sidebar ';
$rbpo_page_sidebar = get_theme_mod( 'rbpo_sidebar_choice', 'no-sidebar' );


if ( $rbpo_global_sidebar == 'no_sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
    $rbpo_col = 'col-lg-12';
}

elseif ( $rbpo_global_sidebar == 'left_sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
    $rbpo_col = 'col-lg-8';       
} 

elseif ( $rbpo_global_sidebar == 'right_sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
    $rbpo_col = 'col-lg-8';
}

else {

    /** ACF Page Sidebar **/
    if ( $rbpo_page_sidebar == 'left-sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
        $rbpo_col = 'col-lg-8'; 
    } 

    elseif ( $rbpo_page_sidebar == 'right-sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
        $rbpo_col = 'col-lg-8';
    }
    else {
        $rbpo_col = 'col-lg-12';
    }
}
?>

<main id="primary" class="<?php echo esc_attr($rbpo_col); ?>" role="main">    
          
    <?php 
    if ( have_posts() ): while ( have_posts() ): the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class( "general-post" ); ?>>

        <?php 
            if ( true == get_theme_mod( 'rbpo_blog_page_thumbnail_switch', 'on' ) ) {
                do_action( 'rbpo_post_thumbnail' );
            }
        ?>

        <div class="post-content">
            <?php
                if ( true == get_theme_mod( 'rbpo_blog_page_post_meta_switch', 'on' ) ) {
            ?>

                <div class="post-meta">
                    <?php do_action( 'rbpo_post_meta' ); ?>
                </div>

            <?php } ?>

            <h2 class="post-title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            
            <?php
                the_excerpt();
                do_action( 'rbpo_read_btn' );   
            ?>
        </div>

    </article>

    <?php endwhile; endif; ?>

    <?php the_posts_pagination(array(
        'mid_size'  => 2,
        'prev_text' => '<i class="fa-solid fa-chevron-left"></i>',
        'next_text' => '<i class="fa-solid fa-chevron-right"></i>',
    )); ?>

</main>