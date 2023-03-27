<?php
/**
 * Register pattern section main hero.
 *
 * @package    soivigol-blocks
 */

return array(
	'title'      => __( 'Section main hero', 'soivigol-blocks' ),
	'categories' => array( 'featured' ),
	'content'    => '<!-- wp:cover {"overlayColor":"background-light","align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"1rem","right":"1rem"}}}} -->
	<div class="wp-block-cover alignfull" style="padding-top:4rem;padding-right:1rem;padding-bottom:4rem;padding-left:1rem"><span aria-hidden="true" class="wp-block-cover__background has-background-light-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
	<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.2","fontSize":"2.5rem"}},"textColor":"background"} -->
<h1 class="has-background-color has-text-color" style="font-size:2.5rem;line-height:1.2">' . __( 'Web Developer', 'soivigol-blocks' ) . '<br>' . __( 'Specialized in WordPress', 'soivigol-blocks' ) . '</h1>
	<!-- /wp:heading -->

	<!-- wp:heading {"textColor":"background","fontSize":"large"} -->
	<h2 class="has-background-color has-text-color has-large-font-size">' . __( 'A little subtitle that highlights yours skills', 'soivigol-blocks' ) . '</h2>
	<!-- /wp:heading -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link" href="#">' . __( 'Call to action', 'soivigol-blocks' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":24,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
	<figure class="wp-block-image size-full" style="border-radius:10px"><img src="https://pd.w.org/2021/12/67761b1e1e369a0c5.15366783-768x513.jpeg" alt="" class="wp-image-24"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->

	</div></div>
	<!-- /wp:cover -->',
);
