<?php
/**
 * The template for displaying the footer
 *
 * @package Pure_Blog
 */

?>
			</div><!-- .inner-wrapper -->
		</div><!-- .container -->
	</div><!-- #content -->

	<?php do_action( 'pure_blog_after_content' ); ?>

	<?php do_action( 'pure_blog_before_footer' ); ?>

	<?php do_action( 'pure_blog_footer' ); ?>

	<?php do_action( 'pure_blog_after_footer' ); ?>

</div><!-- #page -->

<?php do_action( 'pure_blog_body_bottom' ); ?>

<?php wp_footer(); ?>

</body>
</html>
