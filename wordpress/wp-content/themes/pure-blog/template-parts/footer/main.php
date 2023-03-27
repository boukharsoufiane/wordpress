<?php
/**
 * Main footer
 *
 * @package Pure_Blog
 */

?>
<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="site-footer-inner">
			<?php if ( true === apply_filters( 'pure_blog_credits_status', true ) ) : ?>
				<div class="site-info">
					<?php do_action( 'pure_blog_credits' ); ?>
				</div><!-- .site-info -->
			<?php endif; ?>
		</div><!-- .site-footer-inner -->
	</div><!-- .container -->
</footer><!-- #colophon -->
