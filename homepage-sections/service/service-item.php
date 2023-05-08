<?php
/**
 * The template for displaying frontpage service section
 *
 * Part of service section item
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */
 
$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
    $bashir_rased_services = $bashir_rased_data['bashir-rased-service-item'];
}

foreach ($bashir_rased_services as $bashir_rased_service) :

$bashir_rased_service_item_icon = $bashir_rased_service['bashir-rased-service-item-icon'];

$bashir_rased_service_item_title = $bashir_rased_service['bashir-rased-service-item-title'];

$bashir_rased_service_item_desc = $bashir_rased_service['bashir-rased-service-item-desc'];

if (!empty ($bashir_rased_service_item_icon) || !empty ($bashir_rased_service_item_title) || !empty ($bashir_rased_service_item_desc)) :
?>

<!-- 01. Single Services Item Area Start Here -->
<div class="col-lg-4">
    <div class="bashir-rased-services-single-item">
    
        <!-- Single Services Hover Area Start Here -->
        <div class="bashir-rased-services-single-area-hover">

            <?php if(!empty($bashir_rased_service_item_icon)): ?>
            <div class="bashir-rased-services-hover-icons">
                <i class="<?php echo esc_attr($bashir_rased_service_item_icon); ?>">
                </i>
            </div>
            <?php endif; ?>

            <?php if(!empty($bashir_rased_service_item_title)): ?>
            <div class="bashir-rased-services-hover-title">
                <h4>
                    <?php
                    
                        printf(
						/* translators: %s: Name of service item title */
						'%s',
						esc_html($bashir_rased_service_item_title,'bashir-rased')
						);
                    
                    ?>
                </h4>
            </div>
            <?php endif; ?>

            <?php if(!empty($bashir_rased_service_item_desc)): ?>
            <div class="bashir-rased-services-hover-details">
                <p>
                    <?php
                        printf(
						/* translators: %s: Name of service item description */
						'%s',
						esc_html($bashir_rased_service_item_desc,'bashir-rased')
						);
                    ?>
                </p>
            </div>
            <?php endif; ?>

        </div>
        <!-- Single Services Hover Area End Here -->
    
        <!-- Single Services Area Start Here -->
        <div class="bashir-rased-services-single-area">

            <?php if(!empty($bashir_rased_service_item_icon)): ?>
            <div class="bashir-rased-services-icons">
                <i class="<?php echo esc_attr($bashir_rased_service_item_icon); ?>">
                </i>
            </div>
            <?php endif; ?>

            <?php if(!empty($bashir_rased_service_item_title)): ?>
            <div class="bashir-rased-services-title">
                <h4>
                    <?php
                        printf(
						/* translators: %s: Name of service item title */
						'%s',
						esc_html($bashir_rased_service_item_title,'bashir-rased')
						);
                        
                    ?>
                </h4>
            </div>
            <?php endif; ?>
            
        </div>
        <!-- Single Services Area End Here -->
        
    </div>
</div>
<!-- 01. Single Services Item Area End Here -->

<?php
endif;
endforeach;