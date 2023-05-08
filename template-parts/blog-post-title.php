<?php
/**
 * The template for displaying general post loop title
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
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