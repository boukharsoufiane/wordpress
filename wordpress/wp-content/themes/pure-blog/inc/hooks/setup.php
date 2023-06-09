<?php
/**
 * Setup
 *
 * @package Pure_Blog
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since 1.0.0
 */
function pure_blog_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for post thumbnails.
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'pure-blog-thumb', 730, 486, true );

	// Register menu locations.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary Menu', 'pure-blog' ),
		)
	);

	// Switch default core markup to output valid HTML5.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'pure_blog_custom_background_args',
			array(
				'default-color' => 'fff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Add support for core custom logo.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

add_action( 'after_setup_theme', 'pure_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since 1.0.0
 */
function pure_blog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pure_blog_content_width', 640 );
}

add_action( 'after_setup_theme', 'pure_blog_content_width', 0 );

/**
 * Register widget areas.
 *
 * @since 1.0.0
 */
function pure_blog_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'pure-blog' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'pure-blog' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	for ( $i = 1; $i <= 3; $i++ ) {
		register_sidebar(
			array(
				/* translators: %d: Widget number. */
				'name'          => sprintf( esc_html__( 'Footer %d', 'pure-blog' ), $i ),
				'id'            => 'footer-' . $i,
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}
}

add_action( 'widgets_init', 'pure_blog_widgets_init' );

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 */
function pure_blog_scripts() {
	$fonts_url = pure_blog_get_google_fonts_url();

	if ( $fonts_url ) {
		wp_enqueue_style( 'pure-blog-google-fonts', wptt_get_webfont_url( $fonts_url ), array(), PURE_BLOG_VERSION );
	}

	wp_enqueue_style( 'pure-blog-style', get_stylesheet_uri(), array(), PURE_BLOG_VERSION );

	wp_enqueue_script( 'pure-blog-custom', PURE_BLOG_URL . '/assets/js/custom.js', apply_filters( 'pure_blog_script_dependencies', array() ), PURE_BLOG_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'pure_blog_scripts' );
