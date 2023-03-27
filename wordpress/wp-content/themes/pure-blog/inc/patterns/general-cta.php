<?php
/**
 * General CTA
 *
 * @package Pure_Blog
 */

return array(
	'title'      => __( 'CTA', 'pure-blog' ),
	'categories' => array( 'pure-blog' ),
	'content'    => '
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
	<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"style":{"color":{"text":"#875742"}},"fontSize":"medium"} -->
	<h2 class="has-text-color has-medium-font-size" style="color:#875742">Purely Best</h2>
	<!-- /wp:heading -->

	<!-- wp:heading {"fontSize":"x-large"} -->
	<h2 class="has-x-large-font-size">Award Winning One-Stop Solutions</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"60%"} -->
	<div class="wp-block-column" style="flex-basis:60%"><!-- wp:paragraph -->
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"},"typography":{"fontSize":"16px"},"color":{"text":"#875742"}},"className":"is-style-outline"} -->
	<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:16px"><a class="wp-block-button__link has-text-color wp-element-button" style="border-radius:0px;color:#875742">Read More →</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
