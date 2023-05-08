<?php
/**
 * The template for displaying all single post content.
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.6
 * @since RB Portfolio One 1.1.6
 */

 $rbpo_page_sidebar = function_exists( 'get_field' ) ? get_field( 'main_sidebar' ) : 'no_sidebar ';
 $rbpo_global_sidebar = get_theme_mod( 'rbpo_sidebar_choice', 'no-sidebar' );
 
 
 if ( $rbpo_page_sidebar == 'no_sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
     $rbpo_col = 'col-lg-12';
 }
 
 elseif ( $rbpo_page_sidebar == 'left_sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
     $rbpo_col = 'col-lg-8';       
 } 
 
 elseif ( $rbpo_page_sidebar == 'right_sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
     $rbpo_col = 'col-lg-8';
 }
 
 else {
 
     /** ACF Page Sidebar **/
     if ( $rbpo_global_sidebar == 'left-sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
         $rbpo_col = 'col-lg-8'; 
     } 
 
     elseif ( $rbpo_global_sidebar == 'right-sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
         $rbpo_col = 'col-lg-8';
     }
     else {
         $rbpo_col = 'col-lg-12';
     }
 }

?>

<main id="primary" class="<?php echo esc_attr($rbpo_col); ?>" role="main">
          
    <?php 
    if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class( "general-post" ); ?>>

    <?php 
        if ( true == get_theme_mod( 'rbpo_single_post_thumbnail_switch', 'on' ) ) {
            do_action( 'rbpo_post_thumbnail' );
        }
    ?>

    <div class="post-content">
        <div class="post-meta">
            <?php do_action( 'rbpo_post_meta' ); ?>
        </div>

        <h1 class="post-title">
            <?php the_title(); ?>
        </h1>

        <?php
            the_content();
            $rbpo_pages = array(
                'before' => '<div class="pagination-area">',
                'after' => '</div>',
                'echo' => 1
            );
            wp_link_pages( $rbpo_pages );
        ?>
    </div>

    </article>    

    <?php if( is_single() ) : ?>
    <div class="comments-area">
        <?php
        // If comments are open or there is at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) {
            comments_template();
        }
        ?>
    </div>
    <?php endif; ?>

    <?php endwhile; endif; ?>

</main>