<?php
/**
 * Register pattern section of a services with the image in the left side.
 *
 * @package    soivigol-blocks
 */

return array(
	'title'      => __( 'Section of a services with the image at left', 'soivigol-blocks' ),
	'categories' => array( 'featured' ),
	'content'    => '<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"margin":{"top":"6rem","bottom":"3px"},"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:6rem;margin-bottom:3px;padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem">
	<!-- wp:column {"verticalAlignment":"center","width":"35%","style":{"color":{"duotone":["#333","#CCC"]}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%">
	<!-- wp:image {"align":"center","id":112,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#333","#CCC"]}},"className":"is-style-rounded"} -->
	<figure class="wp-block-image aligncenter size-full is-style-rounded">
	<img src="https://pd.w.org/2022/08/92462f369043cce74.83253271-768x576.jpg" alt="" class="wp-image-112"/>
	</figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","style":{"color":{"duotone":["#333","#CCC"]}}} -->
	<div class="wp-block-column is-vertically-aligned-center">
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="has-large-font-size">' . __( 'Section title of a service or similar something', 'soivigol-blocks' ) . '</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"color":{"duotone":["#333","#CCC"]}}} -->
	<p>' . __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'soivigol-blocks' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link" href="">' . __( 'Contact me', 'soivigol-blocks' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);
