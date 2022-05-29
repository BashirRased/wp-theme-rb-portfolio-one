<?php
/**
 * The template for displaying frontpage about me section
 *
 * Part of about me section description
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.2
 */
 
global $bashir_rased_data;

if($bashir_rased_data) :

$bashir_rased_about_desc = $bashir_rased_data['bashir-rased-about-desc']; 

?>

<!-- About Me Content Area Start Here -->
<div class="bashir-rased-about-me-content">
    <?php
    if(isset($bashir_rased_about_desc) && !empty($bashir_rased_about_desc)) :
    printf(
		/* translators: %s: Name of about me description */
		'%s',
        esc_html($bashir_rased_about_desc,'bashir-rased')
	);
    else: ?>

    <!-- About Me Content Area Start Here -->
    <div class="bashir-rased-about-me-content">

        <p>
            <?php esc_html_e("I'm Bashir Rased. I'm full-time freelancer. I have skills of Graphic Design, Web Design &amp; WordPress Development &amp; Customization.",'bashir-rased'); ?>    
        </p>
                            
        <p>
            <?php esc_html_e("I have 5 years professional experiance in Graphic Design. I'm export of Abode Illustrator and Abode PhotoShop. I can do PSD Web Template, Clipping Path, Vector Design and Typograpy.",'bashir-rased'); ?> 
        </p>

        <p>
            <?php esc_html_e("I have 3 years experiance in Web Design. I'm export of HTML, CSS, JavaScript, jQuery and Bootstrap. I can do Any Web Page Design.",'bashir-rased'); ?>
        </p>

        <p>
            <?php esc_html_e("I have 3 years experiance in Web Development. I'm export of PHP and MySQL. I can do any job of PHP and MySQL.",'bashir-rased'); ?>
        </p>

        <p>
            <?php esc_html_e("I have 2 years experiance in WordPress. I'm export of Any Type of Theme and Plugin Customization, Any Type of Files(PSD Files, HTML Template, Etc.) Convert WordPress Theme, WordPress Theme Migrate, Transform, Clone, Move Or Migration, WordPress Security and WordPress Page SpeedUp.",'bashir-rased'); ?>
        </p>

        <p>
            <?php esc_html_e("I'm full-time freelancer. I can provide your 24 hours services. Need you any help please contact me.",'bashir-rased'); ?>
        </p>

        <p>
            <?php esc_html_e("I have 2 years experiance in Laravel PHP Framework. I can do create any web page in Laravel PHP Framework.",'bashir-rased'); ?>
        </p>

    </div>
    <!-- About Me Content Area End Here -->

    <?php endif; ?>
</div>
<!-- About Me Content Area End Here -->   

<?php else : ?>

<!-- About Me Content Area Start Here -->
<div class="bashir-rased-about-me-content">

    <p>
        <?php esc_html_e("I'm Bashir Rased. I'm full-time freelancer. I have skills of Graphic Design, Web Design &amp; WordPress Development &amp; Customization.",'bashir-rased'); ?>    
    </p>
                        
    <p>
        <?php esc_html_e("I have 5 years professional experiance in Graphic Design. I'm export of Abode Illustrator and Abode PhotoShop. I can do PSD Web Template, Clipping Path, Vector Design and Typograpy.",'bashir-rased'); ?> 
    </p>

    <p>
        <?php esc_html_e("I have 3 years experiance in Web Design. I'm export of HTML, CSS, JavaScript, jQuery and Bootstrap. I can do Any Web Page Design.",'bashir-rased'); ?>
    </p>

    <p>
        <?php esc_html_e("I have 3 years experiance in Web Development. I'm export of PHP and MySQL. I can do any job of PHP and MySQL.",'bashir-rased'); ?>
    </p>

    <p>
        <?php esc_html_e("I have 2 years experiance in WordPress. I'm export of Any Type of Theme and Plugin Customization, Any Type of Files(PSD Files, HTML Template, Etc.) Convert WordPress Theme, WordPress Theme Migrate, Transform, Clone, Move Or Migration, WordPress Security and WordPress Page SpeedUp.",'bashir-rased'); ?>
    </p>

    <p>
        <?php esc_html_e("I'm full-time freelancer. I can provide your 24 hours services. Need you any help please contact me.",'bashir-rased'); ?>
    </p>

    <p>
        <?php esc_html_e("I have 2 years experiance in Laravel PHP Framework. I can do create any web page in Laravel PHP Framework.",'bashir-rased'); ?>
    </p>
    
</div>
<!-- About Me Content Area End Here -->

<?php endif; ?>