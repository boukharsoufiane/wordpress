<?php
/**
 * General Latest Articles
 *
 * @package Pure_Blog
 */

return array(
	'title'      => __( 'Latest Articles', 'pure-blog' ),
	'categories' => array( 'pure-blog' ),
	'content'    => '
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"15%"} -->
	<div class="wp-block-column" style="flex-basis:15%"></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"70%"} -->
	<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
	<h2 class="has-text-align-center has-large-font-size">Latest Articles</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"15%"} -->
	<div class="wp-block-column" style="flex-basis:15%"></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:separator {"style":{"color":{"background":"#875742"}}} -->
	<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background" style="background-color:#875742;color:#875742"/>
	<!-- /wp:separator -->

	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:query {"queryId":18,"query":{"perPage":"3","pages":"3","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
	<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:group -->
	<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true} /-->

	<!-- wp:post-date {"isLink":true} /-->

	<!-- wp:post-title {"textAlign":"left","isLink":true,"style":{"typography":{"fontSize":"22px"}}} /--></div>
	<!-- /wp:group -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query -->

	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:group -->',
);
