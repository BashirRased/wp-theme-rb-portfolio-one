<?php
/**
 * The template for displaying general post loop thumbnail
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.5
 */

if (has_post_thumbnail()):
?>

<div class="bashir-rased-post-thumbnail">
    <?php the_post_thumbnail(); ?>      
</div>

<?php endif; ?>