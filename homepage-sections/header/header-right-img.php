<?php
/**
 * The template for displaying frontpage header section
 *
 * Part of header section image
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.2
 */

global $bashir_rased_data;

if($bashir_rased_data):

$bashir_rased_header_img = $bashir_rased_data['bashir-rased-header-img']['url'];
 
?>
 
<img src="<?php

if(isset($bashir_rased_header_img) && !empty($bashir_rased_header_img)){
    echo esc_url($bashir_rased_header_img);
}

else{
    echo esc_url(get_template_directory_uri().'/assets/img/Bashir-Rased-01.png');
}
?>" alt="<?php echo esc_attr('Bashir Rased', 'bashir-rased'); ?>" />

<?php else: ?>

<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/Bashir-Rased-01.png'); ?>" alt="<?php echo esc_attr('Bashir Rased', 'bashir-rased'); ?>" />

<?php endif; ?>