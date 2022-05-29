<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.2
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<?php if (have_comments()) : ?>
<div class="bashir-rased-single-post-total-comment">
	<h3 class="comments-title">
		<?php
		$bashir_rased_comment_count = get_comments_number();
		if (1 === $bashir_rased_comment_count) {
			/* translators: %s: Post title. */
			printf( _x('1 comment on %s', 'comments title', 'bashir-rased'), get_the_title());
		}
		else {
			printf(
				/* translators: 1: Number of comments, 2: Post title. */
				_nx(
					'%1$s comment on &ldquo;%2$s&rdquo;',
					'%1$s comments on &ldquo;%2$s&rdquo;',
					$bashir_rased_comment_count,
					'comments title',
					'bashir-rased'
				),
				number_format_i18n( $bashir_rased_comment_count ),
				get_the_title()
			);
		}
		?>
	</h3><!-- .comments-title -->
</div>
<?php endif; ?>

<div class="bashir-rased-single-post-comment-form">
	<?php comment_form(); ?>
</div>

<div class="bashir-rased-single-post-comment-list">
	<?php wp_list_comments(); ?>
</div>

<div class="bashir-rased-single-post-comment-pagination">
	<?php the_comments_pagination(); ?>
</div>