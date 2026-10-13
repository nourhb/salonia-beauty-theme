<?php
/**
 * Title: Hours and location
 * Slug: salonia/hours-location
 * Categories: salonia
 * Description: Salon opening hours and address in two columns with a photo.
 *
 * @package Salonia
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#fdf8f5"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#fdf8f5;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#9d4e5c"}}} -->
			<p class="has-text-color" style="color:#9d4e5c;font-size:0.9rem;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Visit us</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"color":{"text":"#2b2320"}}} -->
			<h2 class="wp-block-heading has-text-color" style="color:#2b2320">In the heart of Leslieville</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#8a7672"}}} -->
			<p class="has-text-color" style="color:#8a7672">1280 Queen Street East, Toronto, ON M4L 1C7 — two blocks from the streetcar, with free parking behind the building.</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"style":{"color":{"background":"#ffffff"},"border":{"radius":"12px"},"shadow":"var:preset|shadow|card","spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group has-background has-shadow" style="background-color:#ffffff;border-radius:12px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#2b2320"}}} -->
				<p class="has-text-color" style="color:#2b2320;font-size:0.95rem">Tuesday – Friday <strong style="float:right">9 AM – 7 PM</strong><br>Saturday <strong style="float:right">9 AM – 5 PM</strong><br>Sunday <strong style="float:right">10 AM – 4 PM</strong><br>Monday <strong style="float:right">Closed</strong></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/booking">Book Your Visit</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"large","className":"is-style-soft-frame"} -->
			<figure class="wp-block-image size-large is-style-soft-frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gallery-salon.jpg" alt="Styling station inside Salonia salon"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
