<?php
/**
 * Template part for displaying related post item
 *
 * @package Pure_Blog
 */

?>
<div class="related-post">
	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
		<?php
			the_post_thumbnail(
				'pure-blog-thumb',
				array(
					'alt' => the_title_attribute(
						array(
							'echo' => false,
						)
					),
				)
			);
			?>
	</a>
	<header class="entry-header">
		<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
		<div class="entry-meta">
			<?php
			pure_blog_posted_on();
			pure_blog_posted_category();
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
</div><!-- .related-post -->
