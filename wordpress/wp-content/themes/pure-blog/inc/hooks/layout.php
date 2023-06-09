<?php
/**
 * Layout hooks
 *
 * @package Pure_Blog
 */

/**
 * Add main header.
 *
 * @since 1.0.0
 */
function pure_blog_add_main_header() {
	get_template_part( 'template-parts/header/main' );
}

add_action( 'pure_blog_header', 'pure_blog_add_main_header' );

/**
 * Add breadcrumb.
 *
 * @since 1.0.0
 */
function pure_blog_add_breadcrumb() {
	if ( true !== apply_filters( 'pure_blog_breadcrumb_status', false ) ) {
		return;
	}

	get_template_part( 'template-parts/header/breadcrumb' );
}

add_action( 'pure_blog_after_header', 'pure_blog_add_breadcrumb' );

/**
 * Add sidebar.
 *
 * @since 1.0.0
 */
function pure_blog_add_sidebar() {
	if ( true !== apply_filters( 'pure_blog_sidebar_status', true ) ) {
		return;
	}

	get_sidebar();
}

add_action( 'pure_blog_sidebar', 'pure_blog_add_sidebar' );

/**
 * Add main footer.
 *
 * @since 1.0.0
 */
function pure_blog_add_main_footer() {
	get_template_part( 'template-parts/footer/main' );
}

add_action( 'pure_blog_footer', 'pure_blog_add_main_footer' );

/**
 * Add footer widgets.
 *
 * @since 1.0.0
 */
function pure_blog_add_footer_widgets() {
	get_template_part( 'template-parts/footer/widgets' );
}

add_action( 'pure_blog_before_footer', 'pure_blog_add_footer_widgets' );

/**
 * Add goto top.
 *
 * @since 1.0.0
 */
function pure_blog_add_goto_top() {
	if ( true !== pure_blog_get_option( 'enable_back_to_top' ) ) {
		return;
	}

	echo '<div id="back_to_top">&uarr;</div>';
}

add_action( 'pure_blog_body_bottom', 'pure_blog_add_goto_top' );

/**
 * Add pagination.
 *
 * @since 1.0.0
 */
function pure_blog_add_pagination() {
	the_posts_pagination(
		array(
			'prev_text' => '&larr;',
			'next_text' => '&rarr;',
		)
	);
}

add_action( 'pure_blog_pagination', 'pure_blog_add_pagination' );

/**
 * Add single navigation.
 *
 * @since 1.0.0
 */
function pure_blog_add_single_navigation() {
	the_post_navigation(
		array(
			'prev_text' => '<span class="nav-arrow">&larr;</span> <span class="nav-subtitle">%title</span>',
			'next_text' => '<span class="nav-subtitle">%title</span> <span class="nav-arrow">&rarr;</span>',
		)
	);
}

add_action( 'pure_blog_single_after_content', 'pure_blog_add_single_navigation' );

/**
 * Add related posts.
 *
 * @since 1.0.0
 */
function pure_blog_add_related_posts() {
	if ( true !== apply_filters( 'pure_blog_related_posts_status', false ) ) {
		return;
	}

	get_template_part( 'template-parts/related-posts' );
}

add_action( 'pure_blog_single_after_content', 'pure_blog_add_related_posts' );

/**
 * Add footer copyright.
 *
 * @since 1.0.0
 */
function pure_blog_add_footer_copyright() {
	$copyright = '';

	$copyright_text = pure_blog_get_option( 'copyright_text' );

	if ( ! empty( $copyright_text ) ) {
		$copyright = pure_blog_apply_theme_shortcode( wp_kses_post( $copyright_text ) );
	}

	if ( $copyright ) {
		echo '<div class="copyright">';
		echo do_shortcode( $copyright ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo '</div><!-- .copyright -->';
	}
}

add_action( 'pure_blog_credits', 'pure_blog_add_footer_copyright', 10 );

/**
 * Add footer poweredby.
 *
 * @since 1.0.0
 */
function pure_blog_add_footer_poweredby() {
	/* translators: 1: Theme name, 2: Theme author. */
	printf( esc_html__( ' Theme: %1$s by %2$s', 'pure-blog' ), esc_html__( 'Pure Blog', 'pure-blog' ), '<a href="https://wphait.com/" target="_blank">WP Hait</a>' );
}

add_action( 'pure_blog_credits', 'pure_blog_add_footer_poweredby', 20 );
