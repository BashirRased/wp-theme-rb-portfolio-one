<?php
/**
 * Custom template breadcrumbs for this theme
 *
 * @package RB_Themes
 * @subpackage RB_Portfolio_One
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'rb_portfolio_one_get_blog_page_id' ) ) {
	/**
	 * Returns the "Posts page" (Blog page) ID, if set.
	 */
	function rb_portfolio_one_get_blog_page_id() {
		$page_for_posts = (int) get_option( 'page_for_posts' );
		return $page_for_posts > 0 ? $page_for_posts : 0;
	}
}

if ( ! function_exists( 'rb_portfolio_one_archive_description' ) ) {
	/**
	 * Returns the archive description wrapped with optional before and after HTML.
	 *
	 * @param string $before HTML or text to display before the description. Default '<div class="header-breadcrumbs-description">'.
	 * @param string $after  HTML or text to display after the description. Default '</div>'.
	 * @return string The wrapped archive description, or empty string if no description.
	 */
	function rb_portfolio_one_archive_description( $before = '<div class="header-breadcrumbs-description">', $after = '</div>' ) {
		$description = get_the_archive_description();
		return $description ? $before . $description . $after : '';
	}
}

if ( ! function_exists( 'rb_portfolio_one_get_breadcrumbs_title_and_desc' ) ) {
	/**
	 * Computes the breadcrumbs title and optional description for the current query.
	 *
	 * @return array [ $title, $description_html ]
	 */
	function rb_portfolio_one_get_breadcrumbs_title_and_desc() {
		$title = '';
		$desc  = '';

		// Latest posts as homepage (front page is the posts index).
		if ( is_front_page() && is_home() ) {
			$title = esc_html__( 'Home', 'rb-portfolio-one' );
		} elseif ( is_front_page() ) {
			// You can choose to always use "Home" or the page title.
			// Using explicit "Home" keeps things consistent with many designs:.
			$title = esc_html__( 'Home', 'rb-portfolio-one' );
			// Or to show the actual static page title, use this instead:
			// $front_id = (int) get_option( 'page_on_front' );
			// $title    = $front_id ? esc_html( get_the_title( $front_id ) ) : esc_html__( 'Home', 'rb-portfolio-one' );.
		} elseif ( is_home() ) {
			$blog_id = rb_portfolio_one_get_blog_page_id();
			$title   = $blog_id ? esc_html( get_the_title( $blog_id ) ) : esc_html__( 'Blog', 'rb-portfolio-one' );
		} elseif ( is_singular() ) {
			$title = esc_html( get_the_title() );
		} elseif ( is_search() ) {
			/* translators: %s: search query */
			$title = sprintf( esc_html__( 'Search results for “%s”', 'rb-portfolio-one' ), get_search_query() );
		} elseif ( is_404() ) {
			$title = esc_html__( 'Page Not Found', 'rb-portfolio-one' );
		} elseif ( is_author() ) {
			$author = get_queried_object();
			$title  = $author
				? sprintf(
					// translators: %s: Author display name.
					esc_html__( 'Author: %s', 'rb-portfolio-one' ),
					esc_html( $author->display_name )
				)
				: esc_html__( 'Author', 'rb-portfolio-one' );

			$desc = rb_portfolio_one_archive_description();
		} elseif ( is_tag() ) {
			$title = esc_html( single_tag_title( '', false ) );
			$desc  = rb_portfolio_one_archive_description();
		} elseif ( is_category() ) {
			$title = esc_html( single_cat_title( '', false ) );
			$desc  = rb_portfolio_one_archive_description();
		} elseif ( is_tax() ) {
			$title = esc_html( single_term_title( '', false ) );
			$desc  = rb_portfolio_one_archive_description();
		} elseif ( is_day() ) {
			$title = esc_html( get_the_date( _x( 'F j, Y', 'daily archives date format', 'rb-portfolio-one' ) ) );
		} elseif ( is_month() ) {
			$title = esc_html( get_the_date( _x( 'F Y', 'monthly archives date format', 'rb-portfolio-one' ) ) );
		} elseif ( is_year() ) {
			$title = esc_html( get_the_date( _x( 'Y', 'yearly archives date format', 'rb-portfolio-one' ) ) );
		} else {
			$title = esc_html( get_the_archive_title() );
			$desc  = rb_portfolio_one_archive_description();
		}

		return array( $title, $desc );
	}
}

if ( ! function_exists( 'rb_portfolio_one_breadcrumbs_details' ) ) {
	/**
	 * Prints the H2 title and (optional) archive description.
	 */
	function rb_portfolio_one_breadcrumbs_details() {
		list( $title, $desc ) = rb_portfolio_one_get_breadcrumbs_title_and_desc();

		if ( $title ) {
			echo '<h2 class="header-breadcrumbs-title">' . esc_html( $title ) . '</h2>';
		}
		if ( $desc ) {
			// Description may contain allowed HTML (term descriptions), so kses it.
			echo wp_kses_post( $desc );
		}
	}
	add_action( 'rb_portfolio_one_breadcrumbs', 'rb_portfolio_one_breadcrumbs_details', 10 );
}

/**
 * -------------------------------------------------------------------------
 * Breadcrumbs NAV
 * -------------------------------------------------------------------------
 */
if ( ! function_exists( 'rb_portfolio_one_breadcrumbs_nav' ) ) {
	/**
	 * Outputs a semantic breadcrumb trail.
	 */
	function rb_portfolio_one_breadcrumbs_nav() {

		$home_icon  = '<i class="rb-icon rb-icon-home-1"></i>';
		$home_url   = home_url( '/' );
		$home_label = esc_html__( 'Home', 'rb-portfolio-one' );
		$separator  = '<i class="rb-icon rb-icon-right-1"></i>';

		echo '<nav class="header-breadcrumbs-nav" aria-label="Breadcrumb">';
		echo '<ul class="header-breadcrumbs-menu">';

		// Home Breadcrumbs.
		if ( is_front_page() && is_home() ) {
			echo '<li class="header-breadcrumbs-home-icon">' . wp_kses_post( $home_icon ) . '</li>';
			echo '<li class="header-breadcrumbs-item current" aria-current="page">' . esc_html( $home_label ) . '</li>';
			echo '</ul></nav>';
			return;
		} elseif ( is_front_page() ) {
			echo '<li class="header-breadcrumbs-home-icon">' . wp_kses_post( $home_icon ) . '</li>';
			echo '<li class="header-breadcrumbs-item current" aria-current="page">' . esc_html( $home_label ) . '</li>';
			echo '</ul></nav>';
			return;
		} else {
			echo '<li class="header-breadcrumbs-home-icon">' . wp_kses_post( $home_icon ) . '</li>';
			echo '<li class="header-breadcrumbs-item"><a href="' . esc_url( $home_url ) . '">' . esc_html( $home_label ) . '</a></li>';
			echo '<li class="header-breadcrumbs-separator">' . wp_kses_post( $separator ) . '</li>';
		}

		// Blog index (static front page setup).
		if ( is_home() ) {
			$blog_id    = rb_portfolio_one_get_blog_page_id();
			$blog_title = $blog_id ? get_the_title( $blog_id ) : get_the_title( $blog_id );
			echo '<li class="header-breadcrumbs-item current" aria-current="page">' . esc_html( $blog_title ) . '</li>';
		} elseif ( is_singular( 'post' ) ) {
			$blog_id = rb_portfolio_one_get_blog_page_id();
			if ( $blog_id ) {
				echo '<li class="header-breadcrumbs-item"><a href="' . esc_url( get_permalink( $blog_id ) ) . '">' . esc_html( get_the_title( $blog_id ) ) . '</a></li>';
				echo '<li class="header-breadcrumbs-separator">' . wp_kses_post( $separator ) . '</li>';
			} else {
				$cats = get_the_category();
				if ( ! empty( $cats ) && ! is_wp_error( $cats ) ) {
					$primary = $cats[0];
					$parents = array_reverse( get_ancestors( $primary->term_id, 'category' ) );
					foreach ( $parents as $pid ) {
						$link  = get_term_link( (int) $pid, 'category' );
						$label = get_cat_name( (int) $pid );
						if ( ! is_wp_error( $link ) && $label ) {
							echo '<li class="header-breadcrumbs-item"><a href="' . esc_url( $link ) . '">' . esc_html( $label ) . '</a></li>';
							echo '<li class="header-breadcrumbs-separator">' . wp_kses_post( $separator ) . '</li>';
						}
					}
					echo '<li class="header-breadcrumbs-item"><a href="' . esc_url( get_term_link( $primary ) ) . '">' . esc_html( $primary->name ) . '</a></li>';
					echo '<li class="header-breadcrumbs-separator">' . wp_kses_post( $separator ) . '</li>';
				}
			}
			echo '<li class="header-breadcrumbs-item current" aria-current="page">' . esc_html( get_the_title() ) . '</li>';
		} elseif ( is_page() ) {
			$ancestors = get_post_ancestors( get_the_ID() );
			if ( ! empty( $ancestors ) ) {
				$ancestors = array_reverse( $ancestors );
				foreach ( $ancestors as $ancestor_id ) {
					echo '<li class="header-breadcrumbs-item"><a href="' . esc_url( get_permalink( $ancestor_id ) ) . '">' . esc_html( get_the_title( $ancestor_id ) ) . '</a></li>';
					echo '<li class="header-breadcrumbs-separator">' . wp_kses_post( $separator ) . '</li>';
				}
			}
			echo '<li class="header-breadcrumbs-item current" aria-current="page">' . esc_html( get_the_title() ) . '</li>';
		} elseif ( is_category() || is_tag() || is_tax() ) {
			$term = get_queried_object();
			if ( $term && ! is_wp_error( $term ) ) {
				$parents = array_reverse( get_ancestors( $term->term_id, $term->taxonomy, 'taxonomy' ) );
				foreach ( $parents as $pid ) {
					$link = get_term_link( (int) $pid, $term->taxonomy );
					$t    = get_term( (int) $pid, $term->taxonomy );
					if ( ! is_wp_error( $link ) && $t && ! is_wp_error( $t ) ) {
						echo '<li class="header-breadcrumbs-item"><a href="' . esc_url( $link ) . '">' . esc_html( $t->name ) . '</a></li>';
						echo '<li class="header-breadcrumbs-separator">' . wp_kses_post( $separator ) . '</li>';
					}
				}
				echo '<li class="header-breadcrumbs-item current" aria-current="page">' . esc_html( single_term_title( '', false ) ) . '</li>';
			}
		} elseif ( is_day() || is_month() || is_year() ) {
			$year  = get_query_var( 'year' );
			$month = get_query_var( 'monthnum' );
			$day   = get_query_var( 'day' );

			$year_link = get_year_link( $year );
			if ( $year_link ) {
				if ( is_year() ) {
					echo '<li class="header-breadcrumbs-item current" aria-current="page">' . esc_html( $year ) . '</li>';
				} else {
					echo '<li class="header-breadcrumbs-item"><a href="' . esc_url( $year_link ) . '">' . esc_html( $year ) . '</a></li>';
					echo '<li class="header-breadcrumbs-separator">' . wp_kses_post( $separator ) . '</li>';
				}
			}
			if ( is_month() || is_day() ) {
				$month_link = get_month_link( $year, $month );
				$month_lbl  = date_i18n( 'F', mktime( 0, 0, 0, $month, 10 ) );
				if ( is_month() ) {
					echo '<li class="header-breadcrumbs-item current" aria-current="page">' . esc_html( $month_lbl ) . '</li>';
				} else {
					echo '<li class="header-breadcrumbs-item"><a href="' . esc_url( $month_link ) . '">' . esc_html( $month_lbl ) . '</a></li>';
					echo '<li class="header-breadcrumbs-separator">' . wp_kses_post( $separator ) . '</li>';
				}
			}
			if ( is_day() ) {
				echo '<li class="header-breadcrumbs-item current" aria-current="page">' . esc_html( $day ) . '</li>';
			}
		} elseif ( is_search() ) {
			echo '<li class="header-breadcrumbs-item current" aria-current="page">'
				. sprintf(
					// translators: %s: Search query term entered by the user.
					esc_html__( 'Search: %s', 'rb-portfolio-one' ),
					esc_html( get_search_query() )
				)
				. '</li>';
		} elseif ( is_author() ) {
			$author = get_queried_object();
			$label  = $author ? $author->display_name : esc_html__( 'Author', 'rb-portfolio-one' );
			echo '<li class="header-breadcrumbs-item current" aria-current="page">' . esc_html( $label ) . '</li>';
		} elseif ( is_404() ) {
			echo '<li class="header-breadcrumbs-item current" aria-current="page">' . esc_html__( '404', 'rb-portfolio-one' ) . '</li>';
		}

		echo '</ul></nav>';
	}
	add_action( 'rb_portfolio_one_breadcrumbs', 'rb_portfolio_one_breadcrumbs_nav', 20 );
}
