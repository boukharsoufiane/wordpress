<?php
/**
 * Options
 *
 * @package Pure_Blog
 */

$default = pure_blog_get_default_theme_options();

// Add Theme Options Panel.
$wp_customize->add_panel(
	'theme_option_panel',
	array(
		'title'    => esc_html__( 'Theme Options', 'pure-blog' ),
		'priority' => 80,
	)
);

require_once PURE_BLOG_DIR . '/inc/customizer/options/header.php';
require_once PURE_BLOG_DIR . '/inc/customizer/options/breadcrumb.php';
require_once PURE_BLOG_DIR . '/inc/customizer/options/blog.php';
require_once PURE_BLOG_DIR . '/inc/customizer/options/blog-single.php';

// Load shop page options if WooCommerce is active.
if ( class_exists( 'WooCommerce', false ) ) {
	require_once PURE_BLOG_DIR . '/inc/customizer/options/shop.php';
	require_once PURE_BLOG_DIR . '/inc/customizer/options/shop-single.php';
}

// Load footer options.
require_once PURE_BLOG_DIR . '/inc/customizer/options/footer.php';
