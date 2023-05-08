<?php 
/**
 * The template for sidebar function.
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.5
 * @since RB Portfolio One 1.1.5
 */
 
// widget register
function rbpo_widget_area(){
	register_sidebar(array(
		'name' 			=> __('Sidebar 1', 'rb-portfolio-one'),
		'description' 	=> __('Add your widgets in sidebar 1', 'rb-portfolio-one'),
		'id' 			=> 'sidebar-1',
        'before_sidebar'=> '<aside id="secondary" class="widget-area col-lg-4">',
		'after_sidebar' => '</aside>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h2 class="widget-title">',
		'after_title' 	=> '</h2>',
        'class'  => ''
	)); 
    
}
add_action('widgets_init', 'rbpo_widget_area');