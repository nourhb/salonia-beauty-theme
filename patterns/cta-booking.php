<?php
/**
 * Title: Booking CTA
 * Slug: salonia/cta-booking
 * Categories: salonia
 * Description: Full-width booking call-to-action with salon photo background.
 *
 * @package Salonia
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salon-interior.jpg","dimRatio":60,"overlayColor":"charcoal","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><span aria-hidden="true" class="wp-block-cover__background has-charcoal-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Salonia salon interior" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salon-interior.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"color":{"text":"#ffffff"}}} -->
			<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">Your chair is waiting</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.15rem"},"color":{"text":"#f3e6e0"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#f3e6e0;font-size:1.15rem">Book online in under a minute — new guests save 20% on their first visit.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"typography":{"fontSize":"1.125rem"}}} -->
				<div class="wp-block-button" style="font-size:1.125rem"><a class="wp-block-button__link wp-element-button" href="/booking">💅 Book Now</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="tel:+14165550188" style="color:#ffffff;border-color:#ffffff">📞 (416) 555-0188</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
