<?php
/**
 * The template for cmb2 metabox function.
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.7
 */

function bashir_rased_metaboxes() {

    $bashir_rased_metabox = new_cmb2_box( array(
        'id'            => 'bashir_rased_portfolio_metabox',
        'title'         => __( 'Portfolio Metabox', 'bashir-rased' ),
        'object_types'  => array('portfolio'),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true
    ) );
    
    $bashir_rased_metabox->add_field( array(
        'name'       => __( 'Portfolio Subtitle', 'bashir-rased' ),
        'desc'       => __( 'Portfolio Subtitle Add', 'bashir-rased' ),
        'id'         => 'bashir_rased_portfolio_subtitle_meta',
        'type'       => 'text'
    ) );

}
add_action('cmb2_admin_init', 'bashir_rased_metaboxes');