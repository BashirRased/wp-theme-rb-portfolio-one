<?php
/**
 * The template for displaying all single post content.
 *
 * @package RB_Themes
 */

 $rb_portfolio_one_page_sidebar = function_exists( 'get_field' ) ? get_field( 'main_sidebar' ) : 'no_sidebar ';
 $rb_portfolio_one_global_sidebar = get_theme_mod( 'rb_portfolio_one_sidebar_choice', 'no-sidebar' );
 
 
 if ( $rb_portfolio_one_page_sidebar == 'no_sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
     $rb_portfolio_one_col = 'col-lg-12';
 }
 
 elseif ( $rb_portfolio_one_page_sidebar == 'left_sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
     $rb_portfolio_one_col = 'col-lg-8';       
 } 
 
 elseif ( $rb_portfolio_one_page_sidebar == 'right_sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
     $rb_portfolio_one_col = 'col-lg-8';
 }
 
 else {
 
     /** ACF Page Sidebar **/
     if ( $rb_portfolio_one_global_sidebar == 'left-sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
         $rb_portfolio_one_col = 'col-lg-8'; 
     } 
 
     elseif ( $rb_portfolio_one_global_sidebar == 'right-sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
         $rb_portfolio_one_col = 'col-lg-8';
     }
     else {
         $rb_portfolio_one_col = 'col-lg-12';
     }
 }

?>

<main id="primary" class="<?php echo esc_attr($rb_portfolio_one_col); ?>" role="main">
          
    <?php 
    if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class( "general-post" ); ?>>

    <?php 
        if ( true == get_theme_mod( 'rb_portfolio_one_single_post_thumbnail_switch', 'on' ) ) {
            do_action( 'rb_portfolio_one_post_thumbnail' );
        }
    ?>

    <div class="post-content">
        <div class="post-meta">
            <?php do_action( 'rb_portfolio_one_post_meta' ); ?>
        </div>

        <h1 class="post-title">
            <?php the_title(); ?>
        </h1>

        <?php
            the_content();
            $rb_portfolio_one_pages = array(
                'before' => '<div class="pagination-area">',
                'after' => '</div>',
                'echo' => 1
            );
            wp_link_pages( $rb_portfolio_one_pages );
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