<?php
/**
 * The template for displaying general post loop content
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

?>

<div class="bashir-rased-post-content">
    <?php
    if(is_single()){
        the_content();
        $bashir_rased_pages = array(
            'before' => '<div class="bashir-rased-single-post-pages-list">',
            'after' => '</div>',
            'echo' => 1
        );
        wp_link_pages($bashir_rased_pages);
    }else {
        the_excerpt();
    }     
    ?>
</div>