<?php
/**
 * Custom template breadcrumbs for this theme
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.5
 * @since RB Portfolio One 1.1.5
 */

function rbpo_archive_description( $before = '<div class="header-breadcrumbs-description">', $after = '</div>' ) {
    $description = get_the_archive_description();
    if ( $description ) {
        echo wp_kses_post($before . $description . $after);
    }
}

if ( !function_exists( 'rbpo_breadcrumbs_details' ) ) {

	function rbpo_breadcrumbs_details() {       
                
        // Front Page
        if( is_front_page() && is_home() ): ?>
        <h2 class="header-breadcrumbs-title">
            <?php echo esc_html( get_theme_mod( 'rbpo_blog_page_text', __( 'Blog', 'rb-portfolio-one' ) ) ); ?>
        </h2>

        <?php elseif ( is_front_page() ): ?>
        <h2 class="header-breadcrumbs-title">
            <?php echo esc_html( get_theme_mod( 'rbpo_blog_page_text', __( 'Blog', 'rb-portfolio-one' ) ) ); ?>
        </h2>

        <!-- Single Post -->
        <?php elseif( is_singular()  ): ?>

        <h2 class="header-breadcrumbs-title">
            <?php echo esc_html( get_the_title() ); ?>
        </h2>

        <!-- Search Page -->
        <?php elseif(is_search()): ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('search page','rb-portfolio-one'); ?>
            </h2>

        <!-- 404 Error Page -->
        <?php elseif( is_404() ): ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('404 page','rb-portfolio-one'); ?>
            </h2>

        <!-- Author Page -->
        <?php elseif(is_author()): ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('Author page','rb-portfolio-one'); ?>
            </h2>

        <!-- Year Archive -->
        <?php elseif(is_year()): ?>

        <h2 class="header-breadcrumbs-title">
            <?php echo esc_html('Year Archive','rb-portfolio-one'); ?>
        </h2>

        <!-- Month Archive -->
        <?php
        elseif(is_month()):
        $archive_year  = get_the_time('Y');
		$archive_month = get_the_time('m'); 
        $archive_day   = get_the_time('d');
        ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('Month Archive','rb-portfolio-one'); ?>
            </h2>

        <!-- Day Archive -->
        <?php
        elseif(is_day()):
        $archive_year  = get_the_time('Y');
		$archive_month = get_the_time('m'); 
        $archive_day   = get_the_time('d');
        ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('Day Archive','rb-portfolio-one'); ?>
            </h2>

        <!-- Tag Page -->
        <?php elseif(is_tag()): ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('Tag page','rb-portfolio-one'); ?>
            </h2>
            
            <?php rbpo_archive_description(); ?>
            

        <!-- Category Page -->
        <?php
        elseif(is_category()):

            // Category Taxonomy
            $current_cat_id = get_query_var('cat');
            $queried_object = get_queried_object();
            $taxonomy = $queried_object->taxonomy;

            // Single Category ID
            $term_id = $queried_object->term_id;
            $term_name = $queried_object->name;
            $term_link = get_term_link($term_id, $taxonomy);

            // Parent Category ID
            $parents_id  = get_ancestors( $term_id, $taxonomy);
            $parents_id = array_reverse($parents_id);
        ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('Category page','rb-portfolio-one'); ?>
            </h2>
            
            <?php rbpo_archive_description(); ?>

        <!-- Custom Taxonomy Page -->
        <?php
        elseif( is_tax() ):

            // Custom Taxonomy
            $queried_object = get_queried_object();
            $term_name = $queried_object->name;

            // Single Custom ID
            $term_id = $queried_object->term_id;
            $taxonomy = $queried_object->taxonomy;
            $term_link = get_term_link($term_id, $taxonomy);

            // Parent Custom ID
            $parents_id  = get_ancestors( $term_id, $taxonomy);
            $parents_id = array_reverse($parents_id);
        ?>

            <h2 class="header-breadcrumbs-title">
                <?php echo esc_html('Custom Taxonomy page','rb-portfolio-one'); ?>
            </h2>

            <?php rbpo_archive_description(); ?>

        <?php endif;

	}
    add_action ( 'rbpo_breadcrumbs', 'rbpo_breadcrumbs_details');
}


if ( !function_exists( 'rbpo_breadcrumbs_menu' ) ) {

	function rbpo_breadcrumbs_menu() { ?>    
                
        <div class="header-breadcrumbs-nav">
            <?php if( function_exists( 'bcn_display' ) ) {
                bcn_display();
            } ?>
        </div>

        <?php 

	}
    add_action ( 'rbpo_breadcrumbs', 'rbpo_breadcrumbs_menu');
}