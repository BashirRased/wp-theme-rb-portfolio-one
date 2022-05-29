<?php
/**
 * The template for displaying frontpage portfolio section
 *
 * Part of portfolio section item
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.8
 */
 
$bashir_rased_portfolio_post = new WP_Query(array('post_type'=>'portfolio','posts_per_page'=>-1));
if($bashir_rased_portfolio_post->have_posts()) : 
while($bashir_rased_portfolio_post->have_posts()) : $bashir_rased_portfolio_post->the_post();
?>

<?php if ( has_post_thumbnail() ) : ?>
<!-- 01. My Portfolio Single Item Area Start Here -->
<div class="col-lg-4 bashir-rased-portfolio-item
<?php
    $bashir_rased_taxs = get_the_terms(get_the_ID(),'portfolio_tag');
    
    if (!empty($bashir_rased_taxs)) :
    foreach ($bashir_rased_taxs as $bashir_rased_tax) :
        $bashir_rased_slug = $bashir_rased_tax->slug;
        
        echo " ".wp_kses_post($bashir_rased_slug); 
    endforeach;
	endif;
?>
">
    <div class="bashir-rased-portfolio-signle-item-area">
        
        <!-- My Portfolio Single Image Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item">
            <div class="bashir-rased-portfolio-signle-image">
                <a href="
                <?php echo get_the_post_thumbnail_url(); ?>
                "
                data-fancybox="bashir-rased-portfolio-wordpress-images" data-caption="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail(); ?>
                </a>
            </div>
        </div>
        <!-- My Portfolio Single Image Area End Here -->
                
        <!-- My Portfolio Single Hover Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item-hover-area">
            <div class="bashir-rased-portfolio-signle-title">
                <h5><?php the_title(); ?></h5>
            </div>
            <div class="bashir-rased-portfolio-signle-sub-category">
                <?php
                // Grab the metadata from the database
                $bashir_rased_portfolio_subtitle = get_post_meta( get_the_ID(), 'bashir_rased_portfolio_subtitle_meta', true );

                printf(
				/* translators: %s: Name of portfolio category */
				__('%s','bashir-rased'),
				$bashir_rased_portfolio_subtitle
				);
                ?>
            </div>
        </div>
        <!-- My Portfolio Single Hover Area End Here -->
            
    </div>
</div>
<!-- 01. My Portfolio Single Item Area End Here -->

<?php endif; endwhile; else: ?>

<!-- 01. My Portfolio Single Item Area Start Here -->
<div class="col-lg-4 bashir-rased-portfolio-item wordpress">
    <div class="bashir-rased-portfolio-signle-item-area">
        
        <!-- My Portfolio Single Image Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item">
            <div class="bashir-rased-portfolio-signle-image">
                <a href="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/avada-resume-demo-Bashir-Rased.jpg'); ?>" data-fancybox="bashir-rased-portfolio-wordpress-images" data-caption="<?php echo esc_attr('Avada Resume Demo', 'bashir-rased'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/avada-resume-demo-Bashir-Rased.jpg'); ?>" alt="<?php echo esc_attr('Avada Resume Demo', 'bashir-rased'); ?>" />
                </a>
            </div>
        </div>
        <!-- My Portfolio Single Image Area End Here -->
                
        <!-- My Portfolio Single Hover Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item-hover-area">
            <div class="bashir-rased-portfolio-signle-title">
                <h5>
                    <?php esc_html_e('Avada Resume Website','bashir-rased'); ?>
                </h5>
            </div>
            <div class="bashir-rased-portfolio-signle-sub-category">
                <?php esc_html_e('WP Premium Theme','bashir-rased'); ?>
            </div>
        </div>
        <!-- My Portfolio Single Hover Area End Here -->
            
    </div>
</div>
<!-- 01. My Portfolio Single Item Area End Here -->
        
<!-- 02. My Portfolio Single Item Area Start Here -->
<div class="col-lg-4 bashir-rased-portfolio-item graphic-design">
    <div class="bashir-rased-portfolio-signle-item-area">
                
        <!-- My Portfolio Single Image Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item">
            <div class="bashir-rased-portfolio-signle-image">
                <a href="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/ABT-Solutions-Bashir-Rased.jpg'); ?>" data-fancybox="bashir-rased-portfolio-graphic-design-images" data-caption="<?php echo esc_attr('ABT Solutions Business Card', 'bashir-rased'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/ABT-Solutions-Bashir-Rased.jpg'); ?>" alt="<?php echo esc_attr('ABT Solutions Business Card', 'bashir-rased'); ?>" />
                </a>
            </div>
        </div>
        <!-- My Portfolio Single Image Area End Here -->
                
        <!-- My Portfolio Single Hover Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item-hover-area">
            <div class="bashir-rased-portfolio-signle-title">
                <h5>
                    <?php esc_html_e('ABT Solutions Business Card','bashir-rased'); ?>
                </h5>
            </div>
            <div class="bashir-rased-portfolio-signle-sub-category">
                <?php esc_html_e('Business Card Design','bashir-rased'); ?>
            </div>
        </div>
        <!-- My Portfolio Single Hover Area End Here -->
            
    </div>
</div>
<!-- 02. My Portfolio Single Item Area End Here -->
        
<!-- 03. My Portfolio Single Item Area Start Here -->
<div class="col-lg-4 bashir-rased-portfolio-item graphic-design">
    <div class="bashir-rased-portfolio-signle-item-area">
                
        <!-- My Portfolio Single Image Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item">
            <div class="bashir-rased-portfolio-signle-image">
                <a href="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/Redco-Bashir-Rased.jpg'); ?>" data-fancybox="bashir-rased-portfolio-graphic-design-images" data-caption="<?php echo esc_attr('Redco Logo', 'bashir-rased'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/Redco-Bashir-Rased.jpg'); ?>" alt="<?php echo esc_attr('Redco Logo', 'bashir-rased'); ?>" />
                </a>
            </div>
        </div>
        <!-- My Portfolio Single Image Area End Here -->
                
        <!-- My Portfolio Single Hover Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item-hover-area">
            <div class="bashir-rased-portfolio-signle-title">
                <h5>
                    <?php esc_html_e('Redco Logo','bashir-rased'); ?>
                </h5>
            </div>
            <div class="bashir-rased-portfolio-signle-sub-category">
                <?php esc_html_e('Logo Design','bashir-rased'); ?>
            </div>
        </div>
        <!-- My Portfolio Single Hover Area End Here -->
            
    </div>
</div>
<!-- 03. My Portfolio Single Item Area End Here -->
        
<!-- 04. My Portfolio Single Item Area Start Here -->
<div class="col-lg-4 bashir-rased-portfolio-item graphic-design">
    <div class="bashir-rased-portfolio-signle-item-area">
                
        <!-- My Portfolio Single Image Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item">
            <div class="bashir-rased-portfolio-signle-image">
                <a href="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/Duet-Apartments-on-39th-Bashir-Rased.jpg'); ?>" data-fancybox="bashir-rased-portfolio-graphic-design-images" data-caption="<?php echo esc_attr('Duet Apartment Logo', 'bashir-rased'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/Duet-Apartments-on-39th-Bashir-Rased.jpg'); ?>" alt="<?php echo esc_attr('Duet Apartment Logo', 'bashir-rased'); ?>" />
                </a>
            </div>
        </div>
        <!-- My Portfolio Single Image Area End Here -->
                
        <!-- My Portfolio Single Hover Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item-hover-area">
            <div class="bashir-rased-portfolio-signle-title">
                <h5>
                    <?php esc_html_e('Duet Apartment Logo','bashir-rased'); ?>
                </h5>
            </div>
            <div class="bashir-rased-portfolio-signle-sub-category">
                <?php esc_html_e('Logo Design','bashir-rased'); ?>
            </div>
        </div>
        <!-- My Portfolio Single Hover Area End Here -->
            
    </div>
</div>
<!-- 04. My Portfolio Single Item Area End Here -->

<!-- 05. My Portfolio Single Item Area Start Here -->
<div class="col-lg-4 bashir-rased-portfolio-item graphic-design">
    <div class="bashir-rased-portfolio-signle-item-area">
                
        <!-- My Portfolio Single Image Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item">
            <div class="bashir-rased-portfolio-signle-image">
                <a href="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/CKC-Bashir-Rased.jpg'); ?>" data-fancybox="bashir-rased-portfolio-graphic-design-images" data-caption="<?php echo esc_attr('CKC Logo', 'bashir-rased'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/CKC-Bashir-Rased.jpg'); ?>" alt="<?php echo esc_attr('CKC Logo', 'bashir-rased'); ?>" />
                </a>
            </div>
        </div>
        <!-- My Portfolio Single Image Area End Here -->
                
        <!-- My Portfolio Single Hover Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item-hover-area">
            <div class="bashir-rased-portfolio-signle-title">
                <h5>
                    <?php esc_html_e('CKC Logo','bashir-rased'); ?>
                </h5>
            </div>
            <div class="bashir-rased-portfolio-signle-sub-category">
                <?php esc_html_e('Logo Design','bashir-rased'); ?>
            </div>
        </div>
        <!-- My Portfolio Single Hover Area End Here -->
            
    </div>
</div>
<!-- 05. My Portfolio Single Item Area End Here -->

<!-- 06. My Portfolio Single Item Area Start Here -->
<div class="col-lg-4 bashir-rased-portfolio-item graphic-design">
    <div class="bashir-rased-portfolio-signle-item-area">
                
        <!-- My Portfolio Single Image Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item">
            <div class="bashir-rased-portfolio-signle-image">
                <a href="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/Bel-Cielo-Apartments-Bashir-Rased.jpg'); ?>" data-fancybox="bashir-rased-portfolio-graphic-design-images" data-caption="<?php echo esc_attr('Bel Cielo Apartments Logo', 'bashir-rased'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/Bel-Cielo-Apartments-Bashir-Rased.jpg'); ?>" alt="<?php echo esc_attr('Bel Cielo Apartments Logo', 'bashir-rased'); ?>" />
                </a>
            </div>
        </div>
        <!-- My Portfolio Single Image Area End Here -->
                
        <!-- My Portfolio Single Hover Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item-hover-area">
            <div class="bashir-rased-portfolio-signle-title">
                <h5>
                    <?php esc_html_e('Bel Cielo Apartments Logo','bashir-rased'); ?>
                </h5>
            </div>
            <div class="bashir-rased-portfolio-signle-sub-category">
                <?php esc_html_e('Logo Design','bashir-rased'); ?>
            </div>
        </div>
        <!-- My Portfolio Single Hover Area End Here -->
            
    </div>
</div>
<!-- 06. My Portfolio Single Item Area End Here -->

<!-- 07. My Portfolio Single Item Area Start Here -->
<div class="col-lg-4 bashir-rased-portfolio-item graphic-design">
    <div class="bashir-rased-portfolio-signle-item-area">
                
        <!-- My Portfolio Single Image Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item">
            <div class="bashir-rased-portfolio-signle-image">
                <a href="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/Resilience-logo-02-Bashir-Rased.jpg'); ?>" data-fancybox="bashir-rased-portfolio-graphic-design-images" data-caption="<?php echo esc_attr('Resilience T-Shirt', 'bashir-rased'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/Resilience-logo-02-Bashir-Rased.jpg'); ?>" alt="<?php echo esc_attr('Resilience T-Shirt', 'bashir-rased'); ?>" />
                </a>
            </div>
        </div>
        <!-- My Portfolio Single Image Area End Here -->
                
        <!-- My Portfolio Single Hover Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item-hover-area">
            <div class="bashir-rased-portfolio-signle-title">
                <h5>
                    <?php esc_html_e('Resilience T-Shirt','bashir-rased'); ?>
                </h5>
            </div>
            <div class="bashir-rased-portfolio-signle-sub-category">
                <?php esc_html_e('T-Shirt Design','bashir-rased'); ?>
            </div>
        </div>
        <!-- My Portfolio Single Hover Area End Here -->
            
    </div>
</div>
<!-- 07. My Portfolio Single Item Area End Here -->

<!-- 08. My Portfolio Single Item Area Start Here -->
<div class="col-lg-4 bashir-rased-portfolio-item graphic-design">
    <div class="bashir-rased-portfolio-signle-item-area">
                
        <!-- My Portfolio Single Image Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item">
            <div class="bashir-rased-portfolio-signle-image">
                <a href="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/One-0-One-2-Bashir-Rased.jpg'); ?>" data-fancybox="bashir-rased-portfolio-graphic-design-images" data-caption="<?php echo esc_attr('One 0 One Logo', 'bashir-rased'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/One-0-One-2-Bashir-Rased.jpg'); ?>" alt="<?php echo esc_attr('One 0 One Logo', 'bashir-rased'); ?>" />
                </a>
            </div>
        </div>
        <!-- My Portfolio Single Image Area End Here -->
                
        <!-- My Portfolio Single Hover Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item-hover-area">
            <div class="bashir-rased-portfolio-signle-title">
                <h5>
                    <?php esc_html_e('One 0 One Logo','bashir-rased'); ?>
                </h5>
            </div>
            <div class="bashir-rased-portfolio-signle-sub-category">
                <?php esc_html_e('Logo Design','bashir-rased'); ?>
            </div>
        </div>
        <!-- My Portfolio Single Hover Area End Here -->
            
    </div>
</div>
<!-- 08. My Portfolio Single Item Area End Here -->

<!-- 09. My Portfolio Single Item Area Start Here -->
<div class="col-lg-4 bashir-rased-portfolio-item graphic-design">
    <div class="bashir-rased-portfolio-signle-item-area">
                
        <!-- My Portfolio Single Image Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item">
            <div class="bashir-rased-portfolio-signle-image">
                <a href="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/One-0-One-Bashir-Rased.jpg'); ?>" data-fancybox="bashir-rased-portfolio-graphic-design-images" data-caption="<?php echo esc_attr('One 0 One Logo', 'bashir-rased'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/One-0-One-Bashir-Rased.jpg'); ?>" alt="<?php echo esc_attr('One 0 One Logo', 'bashir-rased'); ?>" />
                </a>
            </div>
        </div>
        <!-- My Portfolio Single Image Area End Here -->
                
        <!-- My Portfolio Single Hover Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item-hover-area">
            <div class="bashir-rased-portfolio-signle-title">
                <h5>
                    <?php esc_html_e('One 0 One Logo','bashir-rased'); ?>
                </h5>
            </div>
            <div class="bashir-rased-portfolio-signle-sub-category">
                <?php esc_html_e('Logo Design','bashir-rased'); ?>
            </div>
        </div>
        <!-- My Portfolio Single Hover Area End Here -->
            
    </div>
</div>
<!-- 09. My Portfolio Single Item Area End Here -->

<!-- 10. My Portfolio Single Item Area Start Here -->
<div class="col-lg-4 bashir-rased-portfolio-item graphic-design">
    <div class="bashir-rased-portfolio-signle-item-area">
                
        <!-- My Portfolio Single Image Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item">
            <div class="bashir-rased-portfolio-signle-image">
                <a href="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/Resilience-logo-01-Bashir-Rased.jpg'); ?>" data-fancybox="bashir-rased-portfolio-graphic-design-images" data-caption="<?php echo esc_attr('Resilience Logo', 'bashir-rased'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/Resilience-logo-01-Bashir-Rased.jpg'); ?>" alt="<?php echo esc_attr('Resilience Logo', 'bashir-rased'); ?>" />
                </a>
            </div>
        </div>
        <!-- My Portfolio Single Image Area End Here -->
                
        <!-- My Portfolio Single Hover Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item-hover-area">
            <div class="bashir-rased-portfolio-signle-title">
                <h5>
                    <?php esc_html_e('Resilience Logo','bashir-rased'); ?>
                </h5>
            </div>
            <div class="bashir-rased-portfolio-signle-sub-category">
                <?php esc_html_e('Logo Design','bashir-rased'); ?>
            </div>
        </div>
        <!-- My Portfolio Single Hover Area End Here -->
            
    </div>
</div>
<!-- 10. My Portfolio Single Item Area End Here -->

<!-- 11. My Portfolio Single Item Area Start Here -->
<div class="col-lg-4 bashir-rased-portfolio-item graphic-design">
    <div class="bashir-rased-portfolio-signle-item-area">
                
        <!-- My Portfolio Single Image Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item">
            <div class="bashir-rased-portfolio-signle-image">
                <a href="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/Pro-Clipping-Bashir-Rased.jpg'); ?>" data-fancybox="bashir-rased-portfolio-graphic-design-images" data-caption="<?php echo esc_attr('Pro Clipping Logo', 'bashir-rased'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/Pro-Clipping-Bashir-Rased.jpg'); ?>" alt="<?php echo esc_attr('Pro Clipping Logo', 'bashir-rased'); ?>" />
                </a>
            </div>
        </div>
        <!-- My Portfolio Single Image Area End Here -->
                
        <!-- My Portfolio Single Hover Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item-hover-area">
            <div class="bashir-rased-portfolio-signle-title">
                <h5>
                    <?php esc_html_e('Pro Clipping Logo','bashir-rased'); ?>
                </h5>
            </div>
            <div class="bashir-rased-portfolio-signle-sub-category">
                <?php esc_html_e('Logo Design','bashir-rased'); ?>
            </div>
        </div>
        <!-- My Portfolio Single Hover Area End Here -->
            
    </div>
</div>
<!-- 11. My Portfolio Single Item Area End Here -->

<!-- 12. My Portfolio Single Item Area Start Here -->
<div class="col-lg-4 bashir-rased-portfolio-item graphic-design">
    <div class="bashir-rased-portfolio-signle-item-area">
                
        <!-- My Portfolio Single Image Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item">
            <div class="bashir-rased-portfolio-signle-image">
                <a href="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/Pro-Clipping-2-Bashir-Rased.jpg'); ?>" data-fancybox="bashir-rased-portfolio-graphic-design-images" data-caption="<?php echo esc_attr('Pro Clipping Logo', 'bashir-rased'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/Pro-Clipping-2-Bashir-Rased.jpg'); ?>" alt="<?php echo esc_attr('Pro Clipping Logo', 'bashir-rased'); ?>" />
                </a>
            </div>
        </div>
        <!-- My Portfolio Single Image Area End Here -->
                
        <!-- My Portfolio Single Hover Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item-hover-area">
            <div class="bashir-rased-portfolio-signle-title">
                <h5>
                <?php esc_html_e('Pro Clipping Logo','bashir-rased'); ?>
                </h5>
            </div>
            <div class="bashir-rased-portfolio-signle-sub-category">
                <?php esc_html_e('Logo Design','bashir-rased'); ?>
            </div>
        </div>
        <!-- My Portfolio Single Hover Area End Here -->
            
    </div>
</div>
<!-- 12. My Portfolio Single Item Area End Here -->

<!-- 13. My Portfolio Single Item Area Start Here -->
<div class="col-lg-4 bashir-rased-portfolio-item graphic-design">
    <div class="bashir-rased-portfolio-signle-item-area">
                
        <!-- My Portfolio Single Image Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item">
            <div class="bashir-rased-portfolio-signle-image">
                <a href="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/Un1ted-Bashir-Rased.jpg'); ?>" data-fancybox="bashir-rased-portfolio-graphic-design-images" data-caption="<?php echo esc_attr('Un1ted Logo', 'bashir-rased'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/Un1ted-Bashir-Rased.jpg'); ?>" alt="<?php echo esc_attr('Un1ted Logo', 'bashir-rased'); ?>" />
                </a>
            </div>
        </div>
        <!-- My Portfolio Single Image Area End Here -->
                
        <!-- My Portfolio Single Hover Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item-hover-area">
            <div class="bashir-rased-portfolio-signle-title">
                <h5>
                    <?php esc_html_e('Un1ted Logo','bashir-rased'); ?>
                </h5>
            </div>
            <div class="bashir-rased-portfolio-signle-sub-category">
                <?php esc_html_e('Logo Design','bashir-rased'); ?>
            </div>
        </div>
        <!-- My Portfolio Single Hover Area End Here -->
            
    </div>
</div>
<!-- 13. My Portfolio Single Item Area End Here -->

<!-- 14. My Portfolio Single Item Area Start Here -->
<div class="col-lg-4 bashir-rased-portfolio-item web-design">
    <div class="bashir-rased-portfolio-signle-item-area">
                
        <!-- My Portfolio Single Image Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item">
            <div class="bashir-rased-portfolio-signle-image">
                <a href="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/html-my-portfolio-website-bashir-rased.jpg'); ?>" data-fancybox="bashir-rased-portfolio-web-design-images" data-caption="<?php echo esc_attr('My HTML Website', 'bashir-rased'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/portfolio/html-my-portfolio-website-bashir-rased.jpg'); ?>" alt="<?php echo esc_attr('My HTML Website', 'bashir-rased'); ?>" />
                </a>
            </div>
        </div>
        <!-- My Portfolio Single Image Area End Here -->
                
        <!-- My Portfolio Single Hover Area Start Here -->
        <div class="bashir-rased-portfolio-signle-item-hover-area">
            <div class="bashir-rased-portfolio-signle-title">
                <h5>
                    <?php esc_html_e('My HTML Website','bashir-rased'); ?>
                </h5>
            </div>
            <div class="bashir-rased-portfolio-signle-sub-category">
                <?php esc_html_e('HTML Template','bashir-rased'); ?>
            </div>
        </div>
        <!-- My Portfolio Single Hover Area End Here -->
            
    </div>
</div>
<!-- 14. My Portfolio Single Item Area End Here -->

<?php endif; wp_reset_postdata(); ?>