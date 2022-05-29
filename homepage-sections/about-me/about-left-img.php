<?php
/**
 * The template for displaying frontpage about me section
 *
 * Part of about me section image
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.0
 */
 
 ?>
 
<img src="<?php
$bashir_rased_data = get_option('bashir_rased_theme_option');
$bashir_rased_about_img_url = $bashir_rased_data['bashir-rased-about-img']['url'];

if(isset($bashir_rased_about_img_url) && !empty($bashir_rased_about_img_url)){
    echo esc_url($bashir_rased_about_img_url);
}

else{
    echo esc_url(get_template_directory_uri().'/assets/img/Bashir-Rased-02.jpg');
}
?>" alt="<?php echo esc_attr('Bashir Rased', 'bashir-rased'); ?>" />