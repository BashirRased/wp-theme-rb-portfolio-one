<?php

/*************************
***** Sidebar Choose *****
*************************/
if ( !function_exists( 'rb_portfolio_one_sidebar_choose' ) ) {
    function rb_portfolio_one_sidebar_choose() {

        $rb_portfolio_one_page_sidebar = function_exists( 'get_field' ) ? get_field( 'main_sidebar' ) : 'no_sidebar ';
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

/*****************************
***** Preloader Switcher *****
*****************************/
if ( !function_exists( 'rb_portfolio_one_preloader_swicher' ) ) {
    function rb_portfolio_one_preloader_swicher() {

        $rb_portfolio_one_page_preloader_enable = function_exists( 'get_field' ) ? get_field( 'preloader_enable' ) : 'off ';
        $rb_portfolio_one_page_preloader_diable = function_exists( 'get_field' ) ? get_field( 'preloader_disable' ) : 'off ';
        $rb_portfolio_one_global_preloader = get_theme_mod( 'rb_portfolio_one_preloader_switch', 'off' );
    
        if ( $rb_portfolio_one_page_preloader_diable == 'on' ) {
            return;       
        } elseif( $rb_portfolio_one_page_preloader_enable == 'on' ) {
            get_template_part( 'template-parts/preloader' );
        }
        else {
            if ( $rb_portfolio_one_global_preloader == 'on' ) {
                get_template_part( 'template-parts/preloader' );
            }
        }
    
    }
    add_action( 'rb_portfolio_one_theme_option_preloader', 'rb_portfolio_one_preloader_swicher' );
}

/********************************
***** Header Topbar Switcher *****
*********************************/
if ( !function_exists( 'rb_portfolio_one_header_topbar_switch' ) ) {
    function rb_portfolio_one_header_topbar_switch() {
        
        $rb_portfolio_one_page_header_topbar_enable = function_exists( 'get_field' ) ? get_field( 'header_topbar_enable' ) : 'off';
        $rb_portfolio_one_page_header_topbar_disable = function_exists( 'get_field' ) ? get_field( 'header_topbar_disable' ) : 'off';
        $rb_portfolio_one_global_header_topbar = get_theme_mod( 'rb_portfolio_one_header_topbar_switch', 'off' );
    
        if ( $rb_portfolio_one_page_header_topbar_disable == 'on' ) {
            return;       
        } elseif ( $rb_portfolio_one_page_header_topbar_enable == 'on' ) {
            get_template_part( 'template-parts/header-top' );
        } else {
            if ( $rb_portfolio_one_global_header_topbar == 'on' ) {
                get_template_part( 'template-parts/header-top' );
            }
        }
    
    }
    add_action( 'rb_portfolio_one_theme_option_header_top', 'rb_portfolio_one_header_topbar_switch' );
}

/*****************************
***** Header Transparent *****
*****************************/
if ( !function_exists( 'rb_portfolio_one_header_transparent' ) ) {
    function rb_portfolio_one_header_transparent() {
        
        $rb_portfolio_one_page_header_transparent_enable = function_exists( 'get_field' ) ? get_field( 'header_transparent_enable' ) : 'off';
        $rb_portfolio_one_page_header_transparent_disable = function_exists( 'get_field' ) ? get_field( 'header_transparent_disable' ) : 'off';
        $rb_portfolio_one_global_header_transparent = get_theme_mod( 'rb_portfolio_one_header_transparent', 'off' );
    
        if ( $rb_portfolio_one_page_header_transparent_disable == 'on' ) {
            return;       
        } elseif ( $rb_portfolio_one_page_header_transparent_enable == 'on' ) {
            echo esc_attr ( 'header-position' );
        } else {
            if ( $rb_portfolio_one_global_header_transparent == 'on' ) {
                echo esc_attr ( 'header-position' );
            }
        }
    
    }
    add_action( 'rb_portfolio_one_theme_option_header_transparent', 'rb_portfolio_one_header_transparent' );
}

/***********************
***** Header Fixed *****
***********************/
if ( !function_exists( 'rb_portfolio_one_header_fixed' ) ) {
    function rb_portfolio_one_header_fixed() {
        
        $rb_portfolio_one_page_header_fixed_enable = function_exists( 'get_field' ) ? get_field( 'header_fixed_enable' ) : 'off';
        $rb_portfolio_one_page_header_fixed_disable = function_exists( 'get_field' ) ? get_field( 'header_fixed_disable' ) : 'off';
        $rb_portfolio_one_global_header_fixed = get_theme_mod( 'rb_portfolio_one_header_fixed', 'off' );
    
        if ( $rb_portfolio_one_page_header_fixed_disable == 'on' ) {
            return;       
        } elseif ( $rb_portfolio_one_page_header_fixed_enable == 'on' ) {
            echo esc_attr ( 'header-fixed' );
        } else {
            if ( $rb_portfolio_one_global_header_fixed == 'on' ) {
                echo esc_attr ( 'header-fixed' );
            }
        }
    
    }
    add_action( 'rb_portfolio_one_theme_option_header_fixed', 'rb_portfolio_one_header_fixed' );
}

/*******************************
***** Breadcrumbs Switcher *****
*******************************/
if ( !function_exists( 'rb_portfolio_one_breadcrumbs_switch' ) ) {
    function rb_portfolio_one_breadcrumbs_switch() {
        
        $rb_portfolio_one_page_breadcrumbs_enable = function_exists( 'get_field' ) ? get_field( 'breadcrumbs_enable' ) : 'off';
        $rb_portfolio_one_page_breadcrumbs_diable = function_exists( 'get_field' ) ? get_field( 'breadcrumbs_disable' ) : 'off';
        
        $rb_portfolio_one_global_breadcrumbs = get_theme_mod( 'rb_portfolio_one_breadcrumbs_switch', 'off' );
    
        if ( $rb_portfolio_one_page_breadcrumbs_diable == 'on' ) {
            return;       
        } elseif ( $rb_portfolio_one_page_breadcrumbs_enable == 'on' ) {
            get_template_part('template-parts/breadcrumbs');
        } else {
            if ( $rb_portfolio_one_global_breadcrumbs == 'on' ) {
                get_template_part('template-parts/breadcrumbs');
            }
        }
    
    }
    add_action( 'rb_portfolio_one_theme_option_breadcrumbs', 'rb_portfolio_one_breadcrumbs_switch' );
}

/*********************************
***** Scroll To Top Switcher *****
**********************************/
if ( !function_exists( 'rb_portfolio_one_scroll_to_top_swicher' ) ) {
    function rb_portfolio_one_scroll_to_top_swicher() {
        
        $rb_portfolio_one_page_scroll_to_top_enable = function_exists( 'get_field' ) ? get_field( 'scroll_to_top_enable' ) : 'off';
        $rb_portfolio_one_page_scroll_to_top_disable = function_exists( 'get_field' ) ? get_field( 'scroll_to_top_disable' ) : 'off';
        $rb_portfolio_one_global_scroll_to_top = get_theme_mod( 'rb_portfolio_one_scroll_to_top_switch', 'off' );
    
        if ( $rb_portfolio_one_page_scroll_to_top_disable == 'on' ) {
            return;       
        } elseif ( $rb_portfolio_one_page_scroll_to_top_enable == 'on' ) {
            get_template_part( 'template-parts/scroll-to-top' );
        } else {
            if ( $rb_portfolio_one_global_scroll_to_top == 'on' ) {
                get_template_part( 'template-parts/scroll-to-top' );
            }
        }
    
    }
    add_action( 'rb_portfolio_one_theme_option_scroll_to_top', 'rb_portfolio_one_scroll_to_top_swicher' );
}