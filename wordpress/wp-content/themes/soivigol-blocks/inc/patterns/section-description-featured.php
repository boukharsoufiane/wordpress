<?php
/**
 * Register pattern section description featured with image in one column and title, short description and link in another column.
 *
 * @package    soivigol-blocks
 */

return array(
	'title'      => __( 'Section of the featured description', 'soivigol-blocks' ),
	'categories' => array( 'featured' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","right":"1rem","left":"1rem"}}},"layout":{"inherit":true}} -->
	<div class="wp-block-group" style="padding-top:4rem;padding-right:1rem;padding-bottom:4rem;padding-left:1rem"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":41,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="wp-block-image size-full is-style-rounded"><img src="https://pd.w.org/2022/06/97462b043aea9c9f3.09814161-768x576.jpg" alt="" class="wp-image-41"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
	<h2 class="has-large-font-size" style="font-style:normal;font-weight:700">' . __( 'Title that describe this section', 'soivigol-blocks' ) . '</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"textsecondary"} -->
	<p class="has-textsecondary-color has-text-color">' . __( 'Description aplied to this section. This description is ideal to describe a short description of the a service or about you that you offer to the clients.', 'soivigol-blocks' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p><strong>' . __( 'Phrase featured of this section', 'soivigol-blocks' ) . '</strong></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p><a href="#" data-type="page" data-id="16">Contact with me</a></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
