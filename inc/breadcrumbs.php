<?php
/**
 * Custom template breadcrumbs for this theme
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.9
 * @since RB Portfolio One 1.1.9
 */

function rb_portfolio_one_archive_description( $before = '<div class="header-breadcrumbs-description">', $after = '</div>' ) {
    $description = get_the_archive_description();
    if ( $description ) {
        echo wp_kses_post( $before . $description . $after );
    }
}

if ( !function_exists( 'rb_portfolio_one_breadcrumbs_img' ) ) {
    function rb_portfolio_one_breadcrumbs_img() {
    ?>
        <style>
            .header-breadcrumbs-area {
                background-color: <?php echo sanitize_hex_color( get_theme_mod( 'rb_portfolio_one_breadcrumbs_color', '#007bff' ) ); ?>;
            }
        </style>
    <?php                
    }
    add_action('wp_head', 'rb_portfolio_one_breadcrumbs_img');
}

if ( !function_exists( 'rb_portfolio_one_breadcrumbs_details' ) ) {

	function rb_portfolio_one_breadcrumbs_details() {  
        
        $rb_portfolio_one_breadcrumbs_img = get_theme_mod( 'rb_portfolio_one_breadcrumbs_image' );        
                
        // Front Page
        if( is_front_page() && is_home() ): ?>
        <h2 class="header-breadcrumbs-title">
            <?php echo esc_html( 'Blog Page', 'rb-portfolio-one' ); ?>
        </h2>

        <?php elseif ( is_front_page() ): ?>
        <h2 class="header-breadcrumbs-title">
            <?php echo esc_html( 'Blog Page', 'rb-portfolio-one' ); ?>
        </h2>

        <!-- Single Post -->
        <?php elseif( is_singular() ): ?>

        <h2 class="header-breadcrumbs-title">
            <?php echo esc_html( get_the_title() ); ?>
        </h2>

        <!-- Search Page -->
        <?php elseif( is_search() ): ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html( 'Search Page', 'rb-portfolio-one' ); ?>
            </h2>

        <!-- 404 Error Page -->
        <?php elseif( is_404() ): ?>           

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html( '404 Page', 'rb-portfolio-one' ); ?>
            </h2>

        <!-- Author Page -->
        <?php elseif( is_author() ): ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html( 'Author Page', 'rb-portfolio-one' ); ?>
            </h2>

            <?php rb_portfolio_one_archive_description(); ?>

        <!-- Year Archive -->
        <?php elseif( is_year() ): ?>

        <h2 class="header-breadcrumbs-title">
            <?php echo esc_html('Year Archive','rb-portfolio-one'); ?>
        </h2>

        <!-- Month Archive -->
        <?php
        elseif( is_month() ):
        $archive_year  = get_the_time('Y');
		$archive_month = get_the_time('m'); 
        $archive_day   = get_the_time('d');
        ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('Month Archive','rb-portfolio-one'); ?>
            </h2>

        <!-- Day Archive -->
        <?php
        elseif( is_day() ):
        $archive_year  = get_the_time('Y');
		$archive_month = get_the_time('m'); 
        $archive_day   = get_the_time('d');
        ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('Day Archive','rb-portfolio-one'); ?>
            </h2>

        <!-- Tag Page -->
        <?php elseif( is_tag() ): ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html( 'Tag Page', 'rb-portfolio-one' ); ?>
            </h2>
            
            <?php rb_portfolio_one_archive_description(); ?>
            

        <!-- Category Page -->
        <?php elseif( is_category() ): ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html( 'Category Page', 'rb-portfolio-one' ); ?>
            </h2>
            
            <?php rb_portfolio_one_archive_description(); ?>

        <!-- Custom Taxonomy Page -->
        <?php elseif( is_tax() ): ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('Custom Taxonomy page','rb-portfolio-one'); ?>
            </h2>

            <?php rb_portfolio_one_archive_description(); ?>

        <?php endif;

	}
    add_action ( 'rb_portfolio_one_breadcrumbs', 'rb_portfolio_one_breadcrumbs_details');
}


if ( !function_exists( 'rb_portfolio_one_breadcrumbs_menu' ) ) {

	function rb_portfolio_one_breadcrumbs_menu() { ?>    
                
        <div class="header-breadcrumbs-nav">
            <?php if( function_exists( 'bcn_display' ) ) {
                bcn_display();
            } ?>
        </div>

        <?php 

	}
    add_action ( 'rb_portfolio_one_breadcrumbs', 'rb_portfolio_one_breadcrumbs_menu');
}