<?php
/**
 * The template for displaying frontpage Header Section
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
    $bashir_rased_header_subtitle_first = $bashir_rased_data['bashir-rased-header-subtitle-first'];

    $bashir_rased_header_subtitle_name = $bashir_rased_data['bashir-rased-header-subtitle-name'];
    
    $bashir_rased_header_subtitle_last = $bashir_rased_data['bashir-rased-header-subtitle-last'];
    
    $bashir_rased_header_title_first = $bashir_rased_data['bashir-rased-header-title-first'];
    
    $bashir_rased_designations = $bashir_rased_data['bashir-rased-header-title-last'];
    
    $bashir_rased_header_btns = $bashir_rased_data['bashir-rased-header-btn-group'];
    
    $bashir_rased_header_img = $bashir_rased_data['bashir-rased-header-img'];
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

if ( empty($bashir_rased_header_subtitle_first) && empty($bashir_rased_header_subtitle_name) && empty($bashir_rased_header_subtitle_last) && empty($bashir_rased_header_title_first) && empty($bashir_rased_designations) && empty($bashir_rased_header_btns)
&& empty($bashir_rased_facebook_link) && empty($bashir_rased_twitter_link)
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
&& empty($bashir_rased_skype_text)
&& empty($bashir_rased_header_img['url']) ) :

else:

if ( empty($bashir_rased_header_img['url']) ) :

?>

<!--============================== 
===== Header Area Strat Here =====
===============================-->
<header class="bashir-rased-header-area">
    <div class="container">
        <div class="row">
            
            <!-- Header Content Left Area Start Here -->
            <div class="col-12 d-table">
                <div class="bashir-rased-content-area-left">
                        
                    <?php
                    if ( empty($bashir_rased_header_subtitle_first) && empty($bashir_rased_header_subtitle_name) && empty($bashir_rased_header_subtitle_last) ):
                    else:
                    ?>
                    <!-- Header Header Title Area Start Here -->
                    <div class="bashir-rased-header-title">
                        <h4>
                            <?php
                            get_template_part('homepage-sections/header/header-subtitle','first');
                            
                            get_template_part('homepage-sections/header/header-subtitle','name');
                            
                            get_template_part('homepage-sections/header/header-subtitle','last');
                            ?>
                        </h4>
                    </div>
                    <!-- Header Header Title Area End Here -->
                    <?php endif; ?>

                    <?php
                    if ( empty($bashir_rased_header_title_first) && empty($bashir_rased_designations) ):
                    else:
                    ?>
                    <!-- Header Header Type Effcet Area Start Here -->
                    <div class="bashir-rased-header-type-effect">
                        <h2>
                            <?php
                            get_template_part('homepage-sections/header/header-title','first');
                            get_template_part('homepage-sections/header/header-title','last');
                            ?>
                        </h2>
                    </div>
                    <!-- Header Header Type Effcet Area End Here -->
                    <?php endif; ?>
                    
                    <?php if ( empty(get_option('rb_facebook_link')) && empty(get_option('rb_twitter_link')) && empty(get_option('rb_linkedin_link')) && empty(get_option('rb_instagram_link')) && empty(get_option('rb_pinterest_link')) && empty(get_option('rb_behance_link')) && empty(get_option('rb_dribbble_link')) && empty(get_option('rb_github_link')) && empty(get_option('rb_youtube_link')) && empty(get_option('rb_blogger_link')) && empty(get_option('rb_wordpress_link')) && empty(get_option('rb_codepen_link')) && empty(get_option('rb_skype_text')) ):
                    else:
                    ?>
                    <!-- Header Header Social Icons Area Start Here -->
                    <div class="bashir-rased-header-social-icons">
                        <nav>
                            <ul>
                                <?php get_template_part('homepage-sections/header/header-social','links'); ?>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Header Social Icons Area End Here -->
                    <?php endif; ?>
                    
                    <?php if ( !empty($bashir_rased_header_btns) ): ?>
                    <!-- Header Header Button Area Start Here -->
                    <div class="bashir-rased-header-btns-area">
                        <?php get_template_part('homepage-sections/header/header','buttons'); ?>
                    </div>
                    <!-- Header Header Button Area End Here -->
                    <?php endif; ?>
                        
                </div>
            </div>
            <!-- Header Content Left Area End Here -->
            
        </div><!-- row end -->
    </div>
</header>
<!--============================ 
===== Header Area End Here =====
=============================-->

<?php elseif ( !empty($bashir_rased_header_img['url']) ) : ?>

<!--============================== 
===== Header Area Strat Here =====
===============================-->
<header id="bashir-rased-page-content" class="bashir-rased-header-area">
    <div class="container">
        <div class="row">

            <!-- Header Content Right Area Start Here -->
            <div class="offset-lg-6 col-lg-6">
                <div class="bashir-rased-content-area-right">
                    <?php get_template_part('homepage-sections/header/header-right','img'); ?>
                </div>
            </div>
            <!-- Header Content Right Area End Here -->
            
        </div><!-- row end -->
    </div>
</header>
<!--============================ 
===== Header Area End Here =====
=============================-->

<?php else: ?>

<!--============================== 
===== Header Area Strat Here =====
===============================-->
<header id="bashir-rased-page-content" class="bashir-rased-header-area">
    <div class="container">
        <div class="row">            
            
            <!-- Header Content Left Area Start Here -->
            <div class="col-lg-6 col-12 d-table">
                <div class="bashir-rased-content-area-left">
                    
                    <?php
                    if ( empty($bashir_rased_header_subtitle_first) || empty($bashir_rased_header_subtitle_name) || empty($bashir_rased_header_subtitle_last) ):
                    ?>
                    <!-- Header Header Title Area Start Here -->
                    <div class="bashir-rased-header-title">
                        <h4>
                            <?php
                            get_template_part('homepage-sections/header/header-subtitle','first');
                            
                            get_template_part('homepage-sections/header/header-subtitle','name');
                            
                            get_template_part('homepage-sections/header/header-subtitle','last');
                            ?>
                        </h4>
                    </div>
                    <!-- Header Header Title Area End Here -->
                    <?php endif; ?>
                    
                    <?php
                    if ( !empty($bashir_rased_header_title_first) || !empty($bashir_rased_designations) ):
                    ?>
                    <!-- Header Header Type Effcet Area Start Here -->
                    <div class="bashir-rased-header-type-effect">
                        <h2>
                            <?php
                            get_template_part('homepage-sections/header/header-title','first');
                            get_template_part('homepage-sections/header/header-title','last');
                            ?>
                        </h2>
                    </div>
                    <!-- Header Header Type Effcet Area End Here -->
                    <?php endif; ?>
                    
                    <?php if ( !empty(get_option('rb_facebook_link')) && !empty(get_option('rb_twitter_link')) && !empty(get_option('rb_linkedin_link')) && !empty(get_option('rb_instagram_link')) && !empty(get_option('rb_pinterest_link')) && !empty(get_option('rb_behance_link')) && !empty(get_option('rb_dribbble_link')) && !empty(get_option('rb_github_link')) && !empty(get_option('rb_youtube_link')) && !empty(get_option('rb_blogger_link')) && !empty(get_option('rb_wordpress_link')) && !empty(get_option('rb_codepen_link')) && !empty(get_option('rb_skype_text')) ):
                    ?>
                    <!-- Header Header Social Icons Area Start Here -->
                    <div class="bashir-rased-header-social-icons">
                        <nav>
                            <ul>
                                <?php get_template_part('homepage-sections/header/header-social','links'); ?>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Header Social Icons Area End Here -->
                    <?php endif; ?>
                    
                    <?php if ( !empty($bashir_rased_header_btns) ): ?>
                    <!-- Header Header Button Area Start Here -->
                    <div class="bashir-rased-header-btns-area">
                        <?php get_template_part('homepage-sections/header/header','buttons'); ?>
                    </div>
                    <!-- Header Header Button Area End Here -->
                    <?php endif; ?>
                        
                </div>
            </div>
            <!-- Header Content Left Area End Here -->
            
            <?php if ( !empty($bashir_rased_header_img['url']) ): ?>
            <!-- Header Content Right Area Start Here -->
            <div class="col-lg-6">
                <div class="bashir-rased-content-area-right">
                    <?php get_template_part('homepage-sections/header/header-right','img'); ?>
                </div>
            </div>
            <!-- Header Content Right Area End Here -->
            <?php endif; ?>
            
        </div><!-- row end -->
    </div>
</header>
<!--============================ 
===== Header Area End Here =====
=============================-->

<?php endif; ?>

<?php endif; ?>