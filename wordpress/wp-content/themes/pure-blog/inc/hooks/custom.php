<?php
/**
 * Custom hooks
 *
 * @package Pure_Blog
 */

/**
 * Add Google fonts.
 *
 * @since 1.0.0
 *
 * @param array $fonts An array of Google fonts.
 * @return array Modified array of fonts.
 */
function pure_blog_add_google_fonts( $fonts ) {
	$fonts[] = 'Nunito Sans';

	return $fonts;
}

add_filter( 'pure_blog_google_fonts', 'pure_blog_add_google_fonts' );

/**
 * Customize breadcrumb status.
 *
 * @since 1.0.0
 *
 * @param bool $status Status.
 * @return bool Modified status.
 */
function pure_blog_customize_breadcrumb_status( $status ) {
	$status = false;

	$enable_breadcrumb = pure_blog_get_option( 'enable_breadcrumb' );

	if ( true === $enable_breadcrumb ) {
		$status = true;
	}

	// Check WooCommerce.
	if ( is_archive() && class_exists( 'WooCommerce', false ) && is_woocommerce() && false === $enable_breadcrumb ) {
		$status = false;
	}

	// Dont show breadcrumb in any case.
	if ( is_front_page() || is_home() || is_404() ) {
		$status = false;
	}

	return $status;
}

add_filter( 'pure_blog_breadcrumb_status', 'pure_blog_customize_breadcrumb_status' );

/**
 * Customize related posts status.
 *
 * @since 1.0.0
 *
 * @param bool $status Status.
 * @return bool Modified status.
 */
function pure_blog_customize_related_posts_status( $status ) {
	$status = false;

	$show_related_posts = pure_blog_get_option( 'show_related_posts' );

	if ( true === $show_related_posts && 'post' === get_post_type() ) {
		$status = true;
	}

	return $status;
}

add_filter( 'pure_blog_related_posts_status', 'pure_blog_customize_related_posts_status' );
