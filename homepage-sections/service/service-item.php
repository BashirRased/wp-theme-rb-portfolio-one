<?php
/**
 * The template for displaying frontpage service section
 *
 * Part of service section item
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.2
 */
 
global $bashir_rased_data;

if ($bashir_rased_data) :

$bashir_rased_services = $bashir_rased_data['bashir-rased-service-item'];

if (isset($bashir_rased_services) && !empty ($bashir_rased_services)) :

foreach ($bashir_rased_services as $bashir_rased_service) :

$bashir_rased_service_item_icon = $bashir_rased_service['bashir-rased-service-item-icon'];

$bashir_rased_service_item_title = $bashir_rased_service['bashir-rased-service-item-title'];

$bashir_rased_service_item_desc = $bashir_rased_service['bashir-rased-service-item-desc'];
?>

<!-- 01. Single Services Item Area Start Here -->
<div class="col-lg-4">
    <div class="bashir-rased-services-single-item">
    
        <!-- Single Services Hover Area Start Here -->
        <div class="bashir-rased-services-single-area-hover">
            <div class="bashir-rased-services-hover-icons">
                <i class="<?php
                    if(isset($bashir_rased_service_item_icon) && !empty($bashir_rased_service_item_icon)){
                        echo esc_attr($bashir_rased_service_item_icon);
                    }
                    else{
                        echo esc_attr('fas fa-handshake');
                    }
                    ?>">
                </i>
            </div>
            <div class="bashir-rased-services-hover-title">
                <h4>
                    <?php
                    if(isset($bashir_rased_service_item_title) && !empty($bashir_rased_service_item_title)){
                        printf(
						/* translators: %s: Name of service item title */
						'%s',
						esc_html($bashir_rased_service_item_title,'bashir-rased')
						);
                    }
                    else{
                        esc_html_e('Add Service Title','bashir-rased');
                    }
                    ?>
                </h4>
            </div>
            <div class="bashir-rased-services-hover-details">
                <p>
                    <?php
                    if(isset($bashir_rased_service_item_desc) && !empty($bashir_rased_service_item_desc)){
                        printf(
						/* translators: %s: Name of service item description */
						'%s',
						esc_html($bashir_rased_service_item_desc,'bashir-rased')
						);
                    }
                    else{
                        esc_html_e('Add Service Description','bashir-rased');
                    }
                    ?>
                </p>
            </div>
        </div>
        <!-- Single Services Hover Area End Here -->
    
        <!-- Single Services Area Start Here -->
        <div class="bashir-rased-services-single-area">
            <div class="bashir-rased-services-icons">
            <i class="<?php
                if(isset($bashir_rased_service_item_icon) && !empty($bashir_rased_service_item_icon)){
                    echo esc_attr($bashir_rased_service_item_icon);
                }
                else{
                    echo esc_attr('fas fa-handshake');
                }
                ?>">
            </i>
            </div>
            <div class="bashir-rased-services-title">
                <h4>
                    <?php
                    if(isset($bashir_rased_service_item_title) && !empty($bashir_rased_service_item_title)){
                        printf(
						/* translators: %s: Name of service item title */
						'%s',
						esc_html($bashir_rased_service_item_title,'bashir-rased')
						);
                    }
                    else{
                        esc_html_e('Add Service Item Title','bashir-rased');
                    }
                    ?>
                </h4>
            </div>
        </div>
        <!-- Single Services Area End Here -->
        
    </div>
</div>
<!-- 01. Single Services Item Area End Here -->

<?php
    endforeach;

    else : get_template_part('homepage-sections/service/service-item','else');

    endif;

    else : get_template_part('homepage-sections/service/service-item','else');
    
    endif;
?>