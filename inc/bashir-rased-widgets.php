<?php 
/**
 * The template for sidebar function.
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */
 
// widget register
function bashir_rased_widget_area(){
	register_sidebar(array(
		'name' 			=> __('Right Sidebar', 'bashir-rased'),
		'description' 	=> __('Add your widgets in right sidebar', 'bashir-rased'),
		'id' 			=> 'bashir-rased-sidebar-right',
        'before_sidebar'=> '<aside id="secondary" class="widget-area col-lg-4">',
		'after_sidebar' => '</aside>',
		'before_widget' => '<div id="%1$s" class="bashir-rased-widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h2 id="%1$s" class="bashir-rased-widget-title %2$s">',
		'after_title' 	=> '</h2>',
        'class'  => ''
	)); 
    
}
add_action('widgets_init', 'bashir_rased_widget_area');