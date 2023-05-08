<?php
/**
 * The template for displaying frontpage Contact Section
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
    $bashir_rased_contact_header_title_black = $bashir_rased_data['bashir-rased-contact-header-title-black'];

    $bashir_rased_contact_header_title_theme_color = $bashir_rased_data['bashir-rased-contact-header-title-theme-color'];
    
    $bashir_rased_massage_title = $bashir_rased_data['bashir-rased-massage-title'];
    
    $bashir_rased_get_in_touch_title = $bashir_rased_data['bashir-rased-get-in-touch-title'];
    
    $bashir_rased_address = $bashir_rased_data['bashir-rased-address'];
    
    $bashir_rased_phone_1 = $bashir_rased_data['bashir-rased-phone-number-1'];
    
    $bashir_rased_phone_2 = $bashir_rased_data['bashir-rased-phone-number-2'];
    
    $bashir_rased_email_1 =	$bashir_rased_data['bashir-rased-email-address-1'];
    
    $bashir_rased_email_2 =	$bashir_rased_data['bashir-rased-email-address-2'];
}

$bashir_rased_facebook_link = (get_option('rb_facebook_link'));
$bashir_rased_twitter_link = (get_option('rb_twitter_link'));
$bashir_rased_linkedin_link = (get_option('rb_linkedin_link'));
$bashir_rased_instagram_link = (get_option('rb_instagram_link'));
$bashir_rased_pinterest_link = (get_option('rb_pinterest_link'));
$bashir_rased_behance_link = (get_option('rb_behance_link'));
$bashir_rased_dribbble_link = (get_option('rb_dribbble_link'));
$bashir_rased_github_link = (get_option('rb_github_link'));
$bashir_rased_youtube_link = (get_option('rb_youtube_link'));
$bashir_rased_blogger_link = (get_option('rb_blogger_link'));
$bashir_rased_wordpress_link = (get_option('rb_wordpress_link'));
$bashir_rased_codepen_link = (get_option('rb_codepen_link'));
$bashir_rased_skype_text = (get_option('rb_skype_text'));

if ( empty($bashir_rased_contact_header_title_black) && empty($bashir_rased_contact_header_title_theme_color) && empty($bashir_rased_massage_title) && empty($bashir_rased_get_in_touch_title) && empty($bashir_rased_address) && empty($bashir_rased_phone_1) && empty($bashir_rased_phone_2) && empty($bashir_rased_email_1) && empty($bashir_rased_email_2) && empty($bashir_rased_facebook_link) && empty($bashir_rased_twitter_link)
&& empty($bashir_rased_linkedin_link)
&& empty($bashir_rased_instagram_link)
&& empty($bashir_rased_pinterest_link)
&& empty($bashir_rased_behance_link)
&& empty($bashir_rased_dribbble_link)
&& empty($bashir_rased_github_link)
&& empty($bashir_rased_youtube_link)
&& empty($bashir_rased_blogger_link)
&& empty($bashir_rased_wordpress_link)
&& empty($bashir_rased_codepen_link)
&& empty($bashir_rased_skype_text) ) :

else:

?>

<!--===================================== 
===== Contact Me Section Strat Here =====
======================================-->
<section id="bashir-rased-contact-me" class="bashir-rased-scroll-menu">
    
    <!--===== Contact Me Section Title Strat Here =====-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bashir-rased-section-title">
                    <h2>
                        <?php get_template_part('homepage-sections/contact/contact','head'); ?>
                    </h2>
                </div>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
    <!--===== Contact Me Section Title End Here =====-->
    
    <!--===== Contact Me Section Content Area Strat Here =====-->
    <div class="container">
        <div class="row">
            
            <!-- Contact Massage Area Start Here -->
            <div class="col-lg-8">
                
                <!-- Contact Me Sub-title Start Here -->
                <div class="bashir-rased-contact-me-sub-title">
                    <h3>
                        <?php get_template_part('homepage-sections/contact/contact-massage','title'); ?>
                    </h3>
                </div>
                <!-- Contact Me Sub-title End Here -->
                
                <?php get_template_part('homepage-sections/contact/contact','form'); ?>
                
            </div>
            <!-- Contact Massage Area End Here -->
            
            <!-- Contact Get In Touch Area Start Here -->
            <div class="col-lg-4">
            
                <!-- Contact Me Sub-title Start Here -->
                <div class="bashir-rased-contact-me-sub-title">
                    <h3>
                        <?php get_template_part('homepage-sections/contact/contact','get-in-touch'); ?>
                    </h3>
                </div>
                <!-- Contact Me Sub-title End Here -->
                
                <!-- Contact Me Info Area Start Here -->
                <div class="bashir-rased-contact-info-area">
                    
                    <!-- Contact Me Info Address Area Start Here -->
                    <div class="bashir-rased-contact-info-highlight">
                        <h5>
                            <?php esc_html_e('address:','bashir-rased');?>
                        </h5>
                    </div>
                    <div class="bashir-rased-contact-info-text">
                        <p>
                            <?php get_template_part('homepage-sections/contact/contact','address'); ?>
                        </p>
                    </div>
                    <!-- Contact Me Info Address Area End Here -->
                        
                    <!-- Contact Me Info Phone Area Start Here -->
                    <div class="bashir-rased-contact-info-highlight">
                        <h5>
                            <?php esc_html_e('phone:','bashir-rased');?>
                        </h5>
                    </div>
                    <div class="bashir-rased-contact-info-text">
                        <p>
                            <?php get_template_part('homepage-sections/contact/contact','phone'); ?>
                        </p>
                    </div>
                    <!-- Contact Me Info Phone Area End Here -->
                        
                    <!-- Contact Me Info E-mail Area Start Here -->
                    <div class="bashir-rased-contact-info-highlight">
                        <h5>
                            <?php esc_html_e('e-mail:','bashir-rased');?>
                        </h5>
                    </div>
                    <div class="bashir-rased-contact-info-text">
                        <p>
                            <?php get_template_part('homepage-sections/contact/contact','email'); ?>
                        </p>
                    </div>
                    <!-- Contact Me Info E-mail Area End Here -->
                    
                    <!-- Contact Me Info Social Icons Area Start Here -->
                    <div class="bashir-rased-contact-info-highlight">
                        <h5>
                            <?php esc_html_e('social links:','bashir-rased');?>
                        </h5>
                    </div>
                    <div class="bashir-rased-contact-info-social-icons">
                        <nav>
                            <ul>
                                <?php get_template_part('homepage-sections/contact/contact-social','links'); ?>                               
                            </ul>
                        </nav>
                    </div>
                    <!-- Contact Me Info Social Icons Area End Here -->
                    
                </div>
                <!-- Contact Me Info Area End Here -->
                
            </div>
            <!-- Contact Get In Touch Area Start Here -->
            
        </div><!-- row end -->
    </div><!-- container end -->
    <!--===== Contact Me Section Content Area End Here =====-->
    
</section>
<!--=================================== 
===== Contact Me Section End Here =====
====================================-->

<?php endif; ?>