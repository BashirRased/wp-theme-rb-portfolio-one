<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB_Themes
 * @subpackage RB_Portfolio_One
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<?php if ( have_comments() ) : ?>
<h3 class="total-comments">
	<?php
	$rb_portfolio_one_comment_count = get_comments_number();
	if ( 1 === $rb_portfolio_one_comment_count ) {
		printf(
			/* translators: %s: Post title. */
			esc_html_x( '1 comment on %s', 'comments title', 'rb-portfolio-one' ),
			esc_html( get_the_title() )
		);
	} else {
		printf(
			esc_html(
				/* translators: 1: Number of comments, 2: Post title. */
				_nx(
					'%1$s comment on %2$s',
					'%1$s comments on %2$s',
					$rb_portfolio_one_comment_count,
					'comments title',
					'rb-portfolio-one'
				)
			),
			esc_html( number_format_i18n( $rb_portfolio_one_comment_count ) ),
			esc_html( get_the_title() )
		);
	}
	?>
</h3><!-- .comments-title -->
<?php endif; ?>

<div class="comments-form">
	<?php comment_form(); ?>
</div>

<div class="comments-list">
	<?php
		wp_list_comments(
			array(
				'style'       => 'ul',
				'callback'    => 'rb_portfolio_one_comment_list',
				'avatar_size' => 90,
				'short_ping'  => true,
			)
		);
		?>
</div>

<div class="comments-pagination">
	<?php the_comments_pagination(); ?>
</div>
