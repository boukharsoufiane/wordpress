<?php
/**
 * General Promo Boxes
 *
 * @package Pure_Blog
 */

return array(
	'title'      => __( 'Promo Boxes', 'pure-blog' ),
	'categories' => array( 'pure-blog' ),
	'content'    => '
  <!-- wp:group {"className":"promo-boxes","layout":{"type":"constrained"}} -->
  <div class="wp-block-group promo-boxes"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"45px","bottom":"15px"}}}} -->
  <div class="wp-block-columns" style="padding-top:45px;padding-bottom:15px"><!-- wp:column -->
  <div class="wp-block-column"><!-- wp:media-text {"mediaId":201,"mediaLink":"#","mediaType":"image","mediaWidth":30,"mediaSizeSlug":"full","isStackedOnMobile":false,"style":{"spacing":{"margin":{"right":"0"}}}} -->
  <div class="wp-block-media-text alignwide" style="margin-right:0;grid-template-columns:30% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri() ) . '/assets/images/who-am-i.jpg" alt="" class="wp-image-201 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","bottom":"8px"}}}} -->
  <h2 style="margin-top:0px;margin-bottom:8px">Who Am I</h2>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"8px"}}}} -->
  <p style="margin-top:0px;margin-bottom:8px">Get to know the full story behind the blog. </p>
  <!-- /wp:paragraph -->

  <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"fontSize":"small"} -->
  <p class="has-small-font-size" style="margin-top:0px;margin-bottom:0px"><a href="#">Read More</a></p>
  <!-- /wp:paragraph --></div></div>
  <!-- /wp:media-text --></div>
  <!-- /wp:column -->

  <!-- wp:column -->
  <div class="wp-block-column"><!-- wp:media-text {"mediaId":203,"mediaLink":"#","mediaType":"image","mediaWidth":30,"mediaSizeSlug":"full","isStackedOnMobile":false,"style":{"spacing":{"margin":{"right":"0"}}}} -->
  <div class="wp-block-media-text alignwide" style="margin-right:0;grid-template-columns:30% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri() ) . '/assets/images/go-to-insta.jpg" alt="" class="wp-image-203 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","bottom":"8px"}}}} -->
  <h2 style="margin-top:0px;margin-bottom:8px">Instagram</h2>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"8px"}}}} -->
  <p style="margin-top:0px;margin-bottom:8px">Find more personal moments and photos.</p>
  <!-- /wp:paragraph -->

  <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"fontSize":"small"} -->
  <p class="has-small-font-size" style="margin-top:0px;margin-bottom:0px"><a href="#">Go to Instagram</a></p>
  <!-- /wp:paragraph --></div></div>
  <!-- /wp:media-text --></div>
  <!-- /wp:column -->

  <!-- wp:column -->
  <div class="wp-block-column"><!-- wp:media-text {"mediaId":205,"mediaLink":"#","mediaType":"image","mediaWidth":30,"mediaSizeSlug":"full","isStackedOnMobile":false,"style":{"spacing":{"margin":{"right":"0"}}}} -->
  <div class="wp-block-media-text alignwide" style="margin-right:0;grid-template-columns:30% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri() ) . '/assets/images/contact-me.jpg" alt="" class="wp-image-205 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","bottom":"8px"}}}} -->
  <h2 style="margin-top:0px;margin-bottom:8px">Contact</h2>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"8px"}}}} -->
  <p style="margin-top:0px;margin-bottom:8px">Drop a note here, I would love to hear from you.</p>
  <!-- /wp:paragraph -->

  <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"fontSize":"small"} -->
  <p class="has-small-font-size" style="margin-top:0px;margin-bottom:0px"><a href="#">Get in Touch</a></p>
  <!-- /wp:paragraph --></div></div>
  <!-- /wp:media-text --></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->

  <!-- wp:separator {"align":"full","style":{"color":{"background":"#e9e9e9"}},"className":"is-style-wide"} -->
  <hr class="wp-block-separator alignfull has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#e9e9e9;color:#e9e9e9"/>
  <!-- /wp:separator --></div>
  <!-- /wp:group -->',
);
