<?php
/**
 * Register pattern section to show logos of the collaborators.
 *
 * @package    soivigol-blocks
 */

$url_theme = get_template_directory_uri();
return array(
	'title'      => __( 'Section of the collaborators', 'soivigol-blocks' ),
	'categories' => array( 'featured' ),
	'content'    => '<!-- wp:cover {"overlayColor":"background-light","align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"1rem","right":"1rem"}}}} -->
	<div class="wp-block-cover alignfull" style="padding-top:4rem;padding-right:1rem;padding-bottom:4rem;padding-left:1rem"><span aria-hidden="true" class="wp-block-cover__background has-background-light-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:group {"layout":{"inherit":false,"contentSize":"1100px"}} -->
	<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"top"} -->
	<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"80%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:80%"><!-- wp:heading {"level":3,"style":{"color":{"duotone":["#333","#CCC"]}},"fontSize":"medium"} -->
	<h3 class="has-medium-font-size">' . __( 'I collaborate with web design agencies and I work how freelance to big business', 'soivigol-blocks' ) . '</h3>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:paragraph {"align":"right","style":{"color":{"duotone":["#333","#CCC"]}}} -->
	<p class="has-text-align-right"><a href="#" data-type="page" data-id="16">Contact with me </a></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"20px"} -->
	<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:gallery {"columns":6,"imageCrop":false,"linkTo":"none"} -->
	<figure class="wp-block-gallery has-nested-images columns-6"><!-- wp:image {"id":57,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#333","#CCC"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/logo.png" alt="" class="wp-image-57"/></figure>
	<!-- /wp:image -->

	<!-- wp:image {"id":56,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#333","#CCC"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/logo.png" alt="" class="wp-image-56"/></figure>
	<!-- /wp:image -->

	<!-- wp:image {"id":55,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#333","#CCC"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/logo.png" alt="" class="wp-image-55"/></figure>
	<!-- /wp:image -->

	<!-- wp:image {"id":54,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#333","#CCC"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/logo.png" alt="" class="wp-image-54"/></figure>
	<!-- /wp:image -->

	<!-- wp:image {"id":53,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#333","#CCC"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/logo.png" alt="" class="wp-image-53"/></figure>
	<!-- /wp:image -->

	<!-- wp:image {"id":52,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#333","#CCC"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/logo.png" alt="" class="wp-image-52"/></figure>
	<!-- /wp:image --></figure>
	<!-- /wp:gallery -->

	<!-- wp:spacer {"height":"20px"} -->
	<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:group -->

	</div></div>
	<!-- /wp:cover -->',
);
