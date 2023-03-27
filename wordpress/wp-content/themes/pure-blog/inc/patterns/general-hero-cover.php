<?php
/**
 * General Hero Cover
 *
 * @package Pure_Blog
 */

return array(
	'title'      => __( 'Hero Cover', 'pure-blog' ),
	'categories' => array( 'pure-blog' ),
	'content'    => '
  <!-- wp:cover {"url":"' . esc_url( get_theme_file_uri() ) . '/assets/images/main-banner.jpg","id":212,"hasParallax":true,"dimRatio":50,"minHeight":510,"isDark":false,"align":"full","className":"alignfull","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}}} -->
  <div class="wp-block-cover alignfull is-light has-parallax" style="padding-top:5rem;padding-bottom:5rem;min-height:510px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div role="img" class="wp-block-cover__image-background wp-image-212 has-parallax" style="background-position:50% 50%;background-image:url(' . esc_url( get_theme_file_uri() ) . '/assets/images/main-banner.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px"}}},"textColor":"white","fontSize":"x-large"} -->
  <h2 class="has-text-align-center has-white-color has-text-color has-x-large-font-size" style="margin-top:0px">The Purpose of Our Lives is to Be Happy.</h2>
  <!-- /wp:heading -->

  <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"2rem","left":"1.5rem","right":"1.5rem"}}},"layout":{"type":"constrained","contentSize":"636px"}} -->
  <div class="wp-block-group" style="padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem"><!-- wp:paragraph {"align":"center","textColor":"white"} -->
  <p class="has-text-align-center has-white-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  <!-- /wp:paragraph --></div>
  <!-- /wp:group -->

  <!-- wp:buttons -->
  <div class="wp-block-buttons"><!-- wp:button {"textColor":"white","align":"center","style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
  <div class="wp-block-button aligncenter is-style-outline"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" style="border-radius:0px">Request A Quote</a></div>
  <!-- /wp:button --></div>
  <!-- /wp:buttons --></div></div>
  <!-- /wp:cover -->',
);
