<?php
/**
 * Block Patterns
 *
 * @package Pure_Blog
 */

/**
 * Register block patterns.
 *
 * @since 1.0.0
 */
function pure_blog_register_block_patterns() {
	// Bail if system is not pattern ready.
	if ( ! function_exists( 'register_block_pattern' ) ) {
		return;
	}

	$pattern_items = array(
		'general-hero-cover',
		'general-promo-boxes',
		'general-cta',
		'general-services',
		'general-latest-articles',
		'general-newsletter',
	);

	$free_patterns = array();

	foreach ( $pattern_items as $pattern_slug ) {
		$free_patterns[ $pattern_slug ] = PURE_BLOG_DIR . "/inc/patterns/$pattern_slug.php";
	}

	$patterns = apply_filters( 'pure_blog_patterns', $free_patterns );

	// Register pattern category.
	register_block_pattern_category(
		'pure-blog',
		array(
			'label' => esc_html__( 'Pure Blog Patterns', 'pure-blog' ),
		)
	);

	// Register patterns.
	if ( is_array( $patterns ) && 0 !== count( $patterns ) ) {
		foreach ( $patterns as $pattern_slug => $pattern_file ) {
			register_block_pattern( "pure-blog/$pattern_slug", require $pattern_file );
		}
	}
}

add_action( 'init', 'pure_blog_register_block_patterns', 9 );
