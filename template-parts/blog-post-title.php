<?php
/**
 * The template for displaying general post loop title
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.9
 */

?>

<div class="bashir-rased-post-title">
    <?php if(is_single()): ?>
        <h2>
            <?php the_title(); ?>
        </h2>
    <?php else: ?>
        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
    <?php endif; ?>
</div>