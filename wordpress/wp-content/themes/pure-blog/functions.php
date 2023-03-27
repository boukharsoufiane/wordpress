<?php
/**
 * Functions
 *
 * @package Pure_Blog
 */

define( 'PURE_BLOG_VERSION', '1.0.2' );
define( 'PURE_BLOG_SLUG', 'pure-blog' );
define( 'PURE_BLOG_DIR', rtrim( get_template_directory(), '/' ) );
define( 'PURE_BLOG_URL', rtrim( get_template_directory_uri(), '/' ) );
define( 'PURE_BLOG_UPGRADE_URL', 'https://checkout.freemius.com/mode/dialog/theme/12240/plan/20749/' );

// Include autoload.
if ( file_exists( PURE_BLOG_DIR . '/vendor/autoload.php' ) ) {
	require_once PURE_BLOG_DIR . '/vendor/autoload.php';
	require_once PURE_BLOG_DIR . '/vendor/wptt/webfont-loader/wptt-webfont-loader.php';
	require_once PURE_BLOG_DIR . '/vendor/ernilambar/ns-customizer-utilities/init.php';
	require_once PURE_BLOG_DIR . '/vendor/ernilambar/wp-welcome/init.php';
}

// Init.
require_once PURE_BLOG_DIR . '/inc/init.php';
