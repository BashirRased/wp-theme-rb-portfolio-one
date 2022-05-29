<?php 
/**
 * The template for sidebar function.
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.6
 */
 
// widget register
function bashir_rased_widget_area(){
	register_sidebar(array(
		'name' 			=> __('Right Sidebar', 'bashir-rased'),
		'description' 	=> __('Add your widgets in right sidebar', 'bashir-rased'),
		'id' 			=> 'bashir-rased-sidebar-right',
        'before_sidebar'=> '<div class="col-lg-4">',
		'after_sidebar' => '</div>',
		'before_widget' => '<div id="%1$s" class="bashir-rased-widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h2 id="%1$s" class="bashir-rased-widget-title %2$s">',
		'after_title' 	=> '</h2>',
        'class'  => ''
	)); 
    
}
add_action('widgets_init', 'bashir_rased_widget_area');