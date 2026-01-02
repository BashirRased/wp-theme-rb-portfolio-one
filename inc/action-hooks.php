<?php

/****************************************
***** Header Site Branding Template *****
****************************************/
if ( ! function_exists( 'rb_portfolio_one_header_site_branding_output' ) ) {
    function rb_portfolio_one_header_site_branding_output() {
        get_template_part( 'template-parts/header/site-branding' );
    }
    add_action( 'rb_portfolio_one_header_site_branding', 'rb_portfolio_one_header_site_branding_output' );
}

/*************************
***** Sidebar Choose *****
*************************/
if ( !function_exists( 'rb_portfolio_one_sidebar_choose' ) ) {
    function rb_portfolio_one_sidebar_choose() {

        $rb_portfolio_one_page_sidebar = function_exists( 'get_field' ) ? get_field( 'main_sidebar' ) : 'no_sidebar';
        $rb_portfolio_one_global_sidebar = get_theme_mod( 'rb_portfolio_one_sidebar_choice', 'no-sidebar' );
    
        if ( $rb_portfolio_one_page_sidebar == 'no_sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
            if ( is_singular() ) {
                get_template_part('template-parts/content-single');
            } else {
                get_template_part('template-parts/content');
            }        
        }
    
        elseif ( $rb_portfolio_one_page_sidebar == 'left_sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
            get_sidebar();
            if ( is_singular() ) {
                get_template_part('template-parts/content-single');
            } else {
                get_template_part('template-parts/content');
            }
        } 
    
        elseif ( $rb_portfolio_one_page_sidebar == 'right_sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
            if ( is_singular() ) {
                get_template_part('template-parts/content-single');
            } else {
                get_template_part('template-parts/content');
            }
            get_sidebar();
        } 
    
        else {
    
            /** Kirki Sidebar **/
            if ( $rb_portfolio_one_global_sidebar == 'left-sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
                get_sidebar();
                if ( is_singular() ) {
                    get_template_part('template-parts/content-single');
                } else {
                    get_template_part('template-parts/content');
                }  
            } 
    
            elseif ( $rb_portfolio_one_global_sidebar == 'right-sidebar' && is_active_sidebar( 'sidebar-1' ) ) {
                if ( is_singular() ) {
                    get_template_part('template-parts/content-single');
                } else {
                    get_template_part('template-parts/content');
                }
                get_sidebar();
            }
            else {
                if ( is_singular() ) {
                    get_template_part('template-parts/content-single');
                } else {
                    get_template_part('template-parts/content');
                }
            }
        }
    
    }
    add_action( 'rb_portfolio_one_theme_option_sidebar', 'rb_portfolio_one_sidebar_choose');
}

/****************************************
***** Footer Template *****
****************************************/
if ( ! function_exists( 'rb_portfolio_one_footer_output' ) ) {
    function rb_portfolio_one_footer_output() {
        get_template_part( 'template-parts/footer/footer' );
    }
    add_action( 'rb_portfolio_one_footer', 'rb_portfolio_one_footer_output' );
}