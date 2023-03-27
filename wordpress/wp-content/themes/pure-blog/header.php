<?php
/**
 * The header for our theme
 *
 * @package Pure_Blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'pure_blog_body_top' ); ?>
<?php do_action( 'wp_body_open' ); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pure-blog' ); ?></a>

	<?php do_action( 'pure_blog_before_header' ); ?>

	<?php do_action( 'pure_blog_header' ); ?>

	<?php do_action( 'pure_blog_after_header' ); ?>

	<?php do_action( 'pure_blog_before_content' ); ?>

	<div id="content" class="site-content">
		<div class="container">
			<div class="inner-wrapper">
