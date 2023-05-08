<?php
/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.5
 * @since RB Portfolio One 1.1.5
 *
 * @link https://git.io/vWdr2
 */
function rbpo_skip_link() {

	// If SCRIPT_DEBUG is defined and true, print the unminified file.
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		echo '<script>';
		include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
		echo '</script>';
	}

	// The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",(function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())}),!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'rbpo_skip_link' );

/**************************************************
***** Post Thumbnail Display Permission Check *****
**************************************************/
function rbpo_can_show_post_thumbnail() {
	/**
	 * Filters whether post thumbnail can be displayed.
	 *
	 * @since RB Portfolio One 1.1.5
	 *
	 * @param bool $show_post_thumbnail Whether to show post thumbnail.
	 */

	return apply_filters(
		'rbpo_can_show_post_thumbnail', ! post_password_required() && ! is_attachment() && has_post_thumbnail()
	);
}

/*********************************
***** Post Thumbnail Display *****
*********************************/
if ( !function_exists( 'rbpo_custom_post_thumbnail' ) ) {
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 *
	 * @since RB Portfolio One 1.1.5
	 *
	 * @return void
	 */
	function rbpo_custom_post_thumbnail() {
		if ( !rbpo_can_show_post_thumbnail() ) {
			return;
		}
		?>

		<figure class="post-thumbnail">
			<?php
			// Lazy-loading attributes should be skipped for thumbnails since they are immediately in the viewport.
			the_post_thumbnail( 'post-thumbnail', array( 'loading' => false ) );
			?>

			<?php 
			if ( is_singular( 'attachment') ) :
			if ( wp_get_attachment_caption( get_post_thumbnail_id() ) ) : ?>
				<figcaption class="wp-caption-text">
					<?php echo wp_kses_post( wp_get_attachment_caption( get_post_thumbnail_id() )); ?>
				</figcaption>
			<?php
			endif;
			endif;
			?>

		</figure><!-- .post-thumbnail -->

		<?php
	}
	add_action( 'rbpo_post_thumbnail', 'rbpo_custom_post_thumbnail');
}

/*************************************
***** Post Category Meta Display *****
*************************************/
if ( ! function_exists( 'rbpo_category_meta' ) ) {
    /**
	 * Current post categories.
	 *
	 * @since RB Portfolio One 1.1.5
	 *
	 * @return void
	 */
    function rbpo_category_meta() {	 
		if ( has_category() ) { ?>
			<span class="cat-meta"><i class="fa-regular fa-folder-open"></i> <?php the_category( ', ' ); ?>
			</span>
		<?php }
    }
    add_action( "rbpo_post_meta", "rbpo_category_meta" );
}

/***********************************
***** Post Author Meta Display *****
***********************************/
if ( ! function_exists( 'rbpo_author_meta' ) ) {
    /**
	 * Current post author.
	 *
	 * @since RB Portfolio One 1.1.5
	 *
	 * @return void
	 */
    function rbpo_author_meta() {
        printf(
			/* translators: %s: Author name. */
			'<span class="author-meta"><i class="fa-regular fa-user"></i> %s</span>',
			'<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" rel="author">' . esc_html( get_the_author(), 'rb-portfolio-one' ) . '</a>'
		);
    }
    add_action( "rbpo_post_meta", "rbpo_author_meta" );
}

/*********************************
***** Post Date Meta Display *****
*********************************/
if ( ! function_exists( 'rbpo_date_meta' ) ) {
    /**
	 * Current post date.
	 *
	 * @since RB Portfolio One 1.1.5
	 *
	 * @return void
	 */
    function rbpo_date_meta() {
        $archive_year  = get_the_time('Y');
		$archive_month = get_the_time('m');
		$archive_date = get_the_time('d');	

		printf(
			/* translators:
			 %1$s: Publish date url.
			 %2$s: Publish date. 
			 */
			'<span class="date-meta"><i class="fa-regular fa-clock"></i><a href="%1$s">%2$s</a></span>',
			esc_url( get_day_link( $archive_year, $archive_month, $archive_date ) ),
			esc_html( get_the_time( get_option( 'date_format' ) ) )
		);

    }
    add_action( "rbpo_post_meta", "rbpo_date_meta" );
}

/*************************************
***** Post Comments Meta Display *****
*************************************/
if ( ! function_exists( 'rbpo_comments_meta' ) ) {
    /**
	 * Current post comments.
	 *
	 * @since RB Portfolio One 1.1.5
	 *
	 * @return void
	 */
    function rbpo_comments_meta() {
        echo '<span class="comments-meta"><i class="fa-regular fa-comments"></i>';
		comments_popup_link(
			__('No Comments','rb-portfolio-one'),
			__('1 Comment','rb-portfolio-one'),
			__('% Comments','rb-portfolio-one'),
			'',
			__('Comments Off','rb-portfolio-one')
		);
		echo '</span>';
    }
    add_action( "rbpo_post_meta", "rbpo_comments_meta" );
}

/*********************************
***** Post Tag Meta Display *****
*********************************/
if ( ! function_exists( 'rbpo_tag_meta' ) ) {
	/**
	 * Prints HTML with meta information for the current tags.
	 *
	 * @since RB Portfolio One 1.1.5
	 *
	 * @return void
	 */
	function rbpo_tag_meta() {
		if ( has_tag() ) {
			$tags_list = get_the_tag_list( '', ', ' );
			if ( $tags_list ) {
				printf(
					/* translators: %s: List of tags. */
					'<span class="tags-link"><i class="fa-solid fa-tags"></i>' . esc_html__( '%s', 'rb-portfolio-one' ) . '</span>',
					$tags_list // phpcs:ignore WordPress.Security.EscapeOutput
				);
			}
		}
	}
}
add_action( 'rbpo_post_meta', 'rbpo_tag_meta' );

/*********************************
***** Post Edit Meta Display *****
*********************************/
if ( ! function_exists( 'rbpo_edit_meta' ) ) {
    /**
	 * Current post edit.
	 *
	 * @since RB Portfolio One 1.1.5
	 *
	 * @return void
	 */
    function rbpo_edit_meta() {
		edit_post_link(
			sprintf(
				/* translators: %s: Post title. Only visible to screen readers. */
				esc_html__( 'Edit', 'rb-portfolio-one' )
			),
			'<span class="entry-meta-edit"><i class="fa-solid fa-user-pen"></i> ',
			'</span>'
		);
    }
    add_action( "rbpo_post_meta", "rbpo_edit_meta" );
}

/***********************************
***** Read More Button Display *****
***********************************/
if( !function_exists( 'rbpo_custom_read_btn' ) ) {

	function rbpo_custom_read_btn() {	
		if ( !empty ( get_the_content() ) ){
			printf(
				/* translators:
				%1$s: Slug of current post.
				%2$s: Button text.
				*/
				'<a class="rbpo-btn" href="%1$s">%2$s <i class="fa-solid fa-arrow-right"></i></a>',
				esc_url( get_permalink() ),
				esc_html__( 'read more', 'rb-portfolio-one' )
			);
		}	
	}
	add_action( 'rbpo_read_btn', 'rbpo_custom_read_btn' );

}

/************************
***** Comment Form *****
************************/
function rbpo_custom_comment_form( $fields ) {
    // What fields you want to control.
    $comment_field_author = $fields['author'];
    $comment_field_email = $fields['email'];
	$comment_field_url = $fields['url'];
    $comment_field_massage = $fields['comment'];
    $comment_field_cookies = $fields['cookies'];

     // The fields you want to unset (remove).
    unset($fields['author']);
    unset($fields['email']);
    unset($fields['url']);
    unset($fields['comment']);
    unset($fields['cookies']);

	// Display the fields to your own taste.
    // The order in which you place them will determine in what order they are displayed.
    $fields['author'] = $comment_field_author;
    $fields['email'] = $comment_field_email;
    $fields['url'] = $comment_field_url;
	$fields['comment'] = $comment_field_massage;	
    $fields['cookies'] = $comment_field_cookies;

    return $fields;
}
add_filter( 'comment_form_fields', 'rbpo_custom_comment_form' );

/***********************
***** Comment List *****
***********************/
if ( ! function_exists( 'rbpo_comment_list' ) ) {
    function rbpo_comment_list( $comment, $args, $depth ) {
        $GLOBAL['comment'] = $comment;
        $args['reply_text'] = 'Reply';
        $replayClass = 'comment-depth-' . esc_attr( $depth );
        ?>
            <li id="comment-<?php comment_ID();?>" class="comment-item">
                <div class="comments-box">
                    <div class="comments-avatar">
                        <?php echo get_avatar( $comment, '90' );?>
                    </div>
                    <div class="comments-text">
                        <div class="avatar-name">
                            <h5><?php print get_comment_author_link();?></h5>
                            <span><?php comment_time( get_option( 'date_format' ) );?></span>
                        </div>
                        <?php comment_text();?>

                        <div class="comments-replay">
                            <?php comment_reply_link( array_merge( $args, [ 'depth' => $depth, 'max_depth' => $args['max_depth'] ] ) );?>
                        </div>

                    </div>
                </div>
        <?php
    }
}

/**************************
***** Skip Link Focus *****
**************************/
if (! function_exists( 'rbpo_focus_fix' ) ){
    function rbpo_focus_fix() {

        // If SCRIPT_DEBUG is defined and true, print the unminified file.
        if ( defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) {
            echo '<script>';
            include get_template_directory().'/assets/js/skip-link-focus-fix.js';
            echo '</script>';
        }
    
        // The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
        ?>
        <script>
        /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",(function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())}),!1);
        </script>
        <?php
    }
    add_action('wp_print_footer_scripts', 'rbpo_focus_fix');
}