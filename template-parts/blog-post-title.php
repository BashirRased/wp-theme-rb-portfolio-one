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