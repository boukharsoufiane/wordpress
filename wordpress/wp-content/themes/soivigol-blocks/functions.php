<?php
/**
 * Soivigol Block Theme Functions
 *
 * @package    soivigol-blocks
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue styles to Soivigol Block Theme.
 */
function soivigol_enqueue_scripts() {
	wp_enqueue_style(
		'soivigol-blocks-stye',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get( 'Version' ),
	);
}
add_action( 'wp_enqueue_scripts', 'soivigol_enqueue_scripts' );
add_action( 'enqueue_block_editor_assets', 'soivigol_enqueue_scripts' );


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since Twenty Twenty-Two 1.0
 *
 * @return void
 */
function soivigol_add_support() {

	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );

	add_theme_support( 'align-wide' );

	add_theme_support( 'align-full' );

}

add_action( 'after_setup_theme', 'soivigol_add_support' );

require get_template_directory() . '/inc/patterns.php';
