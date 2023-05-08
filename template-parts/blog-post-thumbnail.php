<?php
/**
 * The template for displaying general post loop thumbnail
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

if (has_post_thumbnail()):
?>

<div class="bashir-rased-post-thumbnail">
    <?php the_post_thumbnail(); ?>      
</div>

<?php endif; ?>