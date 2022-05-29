<?php 

// widget register
function bashirrased_widget_area(){
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
add_action('widgets_init', 'bashirrased_widget_area');