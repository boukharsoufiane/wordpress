<?php
/**
 * General Newsletter
 *
 * @package Pure_Blog
 */

return array(
	'title'      => __( 'Newsletter', 'pure-blog' ),
	'categories' => array( 'pure-blog' ),
	'content'    => '
	<!-- wp:cover {"customOverlayColor":"#f9f9f9","minHeight":100,"isDark":false,"align":"full"} -->
	<div class="wp-block-cover alignfull is-light" style="min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#f9f9f9"></span><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"1188px"} -->
	<div class="wp-block-column" style="flex-basis:1188px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"fontSize":"x-large"} -->
	<h2 class="has-x-large-font-size">Subscribe Now</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:paragraph --><p>Add Newsletter Form Shortcode Here</p><!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->',
);
