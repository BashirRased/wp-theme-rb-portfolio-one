<?php
/**
 * The template for displaying frontpage service section
 *
 * Part of service section item
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.5
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

$bashir_rased_services = $bashir_rased_data['bashir-rased-service-item'] ? $bashir_rased_data['bashir-rased-service-item'] : "";

if (isset($bashir_rased_services) && !empty($bashir_rased_services)) :

foreach ($bashir_rased_services as $bashir_rased_service) :
?>

<!-- 01. Single Services Item Area Start Here -->
<div class="col-lg-4">
    <div class="bashir-rased-services-single-item">
    
        <!-- Single Services Hover Area Start Here -->
        <div class="bashir-rased-services-single-area-hover">
            <div class="bashir-rased-services-hover-icons">
                <i class="<?php
                    if(isset($bashir_rased_service['bashir-rased-service-item-icon']) && !empty($bashir_rased_service['bashir-rased-service-item-icon'])){
                        echo wp_kses_post($bashir_rased_service['bashir-rased-service-item-icon']);
                    }
                    else{
                        echo 'fas fa-handshake';
                    }
                    ?>">
                </i>
            </div>
            <div class="bashir-rased-services-hover-title">
                <h4>
                    <?php
                    if(isset($bashir_rased_service['bashir-rased-service-item-title']) && !empty($bashir_rased_service['bashir-rased-service-item-title'])){
                        printf(
						/* translators: %s: Name of service item title */
						__('s%','bashir-rased'),
						$bashir_rased_service['bashir-rased-service-item-title']
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
                    if(isset($bashir_rased_service['bashir-rased-service-item-desc']) && !empty($bashir_rased_service['bashir-rased-service-item-desc'])){
                        printf(
						/* translators: %s: Name of service item description */
						__('s%','bashir-rased'),
						$bashir_rased_service['bashir-rased-service-item-desc']
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
                if(isset($bashir_rased_service['bashir-rased-service-item-icon']) && !empty($bashir_rased_service['bashir-rased-service-item-icon'])){
                    echo wp_kses_post($bashir_rased_service['bashir-rased-service-item-icon']);
                }
                else{
                    echo 'fas fa-handshake';
                }
                ?>">
            </i>
            </div>
            <div class="bashir-rased-services-title">
                <h4>
                    <?php
                    if(isset($bashir_rased_service['bashir-rased-service-item-title']) && !empty($bashir_rased_service['bashir-rased-service-item-title'])){
                        printf(
						/* translators: %s: Name of service item title */
						__('s%','bashir-rased'),
						$bashir_rased_service['bashir-rased-service-item-title']
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
?>