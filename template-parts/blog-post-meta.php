<?php
/**
 * The template for displaying general post loop post meta
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

?>

<div class="bashir-rased-post-meta">

    <div class="bashir-rased-post-meta-author">
        <i class="fa-solid fa-user"></i>
        <?php
            printf(
                /* translators: %s: Author name. */
                esc_html__('%s','bashir-rased'),
                '<a href="'.esc_url(get_author_posts_url(get_the_author_meta( 'ID'))).'">'.esc_html(get_the_author()).'</a>'
            );
        ?>
    </div>

    <div class="bashir-rased-post-meta-time">
        <i class="fa-solid fa-clock"></i>
        <?php $bashir_rased_archive_year  = get_the_time('Y'); $bashir_rased_archive_month = get_the_time('m'); 
        $bashir_rased_archive_day = get_the_time('d'); ?>       
        <a href="<?php echo esc_url(get_day_link( $bashir_rased_archive_year, $bashir_rased_archive_month, $bashir_rased_archive_day)); ?>">
        <?php echo get_the_date("j F Y"); ?>
        </a>
    </div>

    <div class="bashir-rased-post-meta-comments-count">
        <i class="fa-solid fa-comments"></i>
        <?php
            comments_popup_link(
                __('No Comments','bashir-rased'),
                __('1 Comment','bashir-rased'),
                __('% Comments','bashir-rased'),
                'bashir-rased-comments-btn',
                __('Comments Off','bashir-rased')
            );
        ?>
    </div>

    <?php
    if (has_category()) {
        /* translators: Used between list items, there is a space after the comma. */
        $bashir_rased_categories_list = get_the_category_list(__(', ','bashir-rased') );
        if ($bashir_rased_categories_list) {
            printf(
                /* translators: %s: List of categories. */
                '<div class="bashir-rased-post-meta-category"><i class="fa-solid fa-folder-open"></i> '.esc_html__('%s', 'bashir-rased').'</div>',
                $bashir_rased_categories_list // phpcs:ignore WordPress.Security.EscapeOutput
            );
        }
    }
    ?>

    <?php
    if (has_tag()) {
        /* translators: Used between list items, there is a space after the comma. */
        $tags_list = get_the_tag_list('',__( ', ', 'bashir-rased'));
        if ($tags_list) {
            printf(
                /* translators: %s: List of tags. */
                '<div class="bashir-rased-post-meta-tag"><i class="fa-solid fa-tags"></i> '.esc_html__('  %s', 'bashir-rased').'</div>',
                $tags_list // phpcs:ignore WordPress.Security.EscapeOutput
            );
        }
    }
    ?>

    <div class="bashir-rased-post-meta-post-edit">
        <i class="fa-solid fa-file-pen"></i>
        <?php edit_post_link(__('Edit','bashir-rased')); ?>
    </div>

</div>