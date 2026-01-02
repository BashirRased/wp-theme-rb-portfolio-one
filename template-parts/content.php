<?php
/**
 * The template for displaying all archive post content.
 *
 * @package RB_Themes
 */


$rb_portfolio_one_global_sidebar = function_exists( 'get_field' ) ? get_field( 'sidebar_choose' ) : 'no_sidebar ';
$rb_portfolio_one_page_sidebar = get_theme_mod( 'rb_portfolio_one_sidebar_choice', 'no-sidebar' );


if ( $rb_portfolio_one_global_sidebar == 'no_sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
    $rb_portfolio_one_col = 'col-lg-12';
}

elseif ( $rb_portfolio_one_global_sidebar == 'left_sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
    $rb_portfolio_one_col = 'col-lg-8';       
} 

elseif ( $rb_portfolio_one_global_sidebar == 'right_sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
    $rb_portfolio_one_col = 'col-lg-8';
}

else {

    /** ACF Page Sidebar **/
    if ( $rb_portfolio_one_page_sidebar == 'left-sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
        $rb_portfolio_one_col = 'col-lg-8'; 
    } 

    elseif ( $rb_portfolio_one_page_sidebar == 'right-sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
        $rb_portfolio_one_col = 'col-lg-8';
    }
    else {
        $rb_portfolio_one_col = 'col-lg-12';
    }
}
?>

<main id="primary" class="<?php echo esc_attr($rb_portfolio_one_col); ?>" role="main">    
          
    <?php 
    if ( have_posts() ): while ( have_posts() ): the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class( "general-post" ); ?>>

        <?php 
            if ( true == get_theme_mod( 'rb_portfolio_one_blog_page_thumbnail_switch', 'on' ) ) {
                do_action( 'rb_portfolio_one_post_thumbnail' );
            }
        ?>

        <div class="post-content">
            <?php
                if ( true == get_theme_mod( 'rb_portfolio_one_blog_page_post_meta_switch', 'on' ) ) {
            ?>

                <div class="post-meta">
                    <?php do_action( 'rb_portfolio_one_post_meta' ); ?>
                </div>

            <?php } ?>

            <h2 class="post-title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            
            <?php
                the_excerpt();
                do_action( 'rb_portfolio_one_read_btn' );   
            ?>
        </div>

    </article>

    <?php endwhile; endif; ?>

    <?php the_posts_pagination(array(
        'mid_size'  => 2,
        'prev_text' => '<i class="rb-icon rb-icon-left-1"></i>',
        'next_text' => '<i class="rb-icon rb-icon-right-1"></i>',
    )); ?>

</main>