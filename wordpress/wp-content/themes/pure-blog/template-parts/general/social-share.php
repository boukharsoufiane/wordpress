<?php
/**
 * Social Share
 *
 * @package Pure_Blog
 */

$post_id = get_the_ID();

$social_share_heading = pure_blog_get_option( 'social_share_heading' );
?>

<div class="pure-blog-social-share">
	<?php if ( ! empty( $social_share_heading ) ) : ?>
		<h2 class="heading"><?php echo esc_html( $social_share_heading ); ?></h2>
	<?php endif; ?>

	<?php echo pure_blog_get_social_share( $post_id ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</div><!-- .pure-blog-social-share -->
