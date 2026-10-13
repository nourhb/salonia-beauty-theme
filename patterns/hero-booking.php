<?php
/**
 * Title: Hero with booking CTA
 * Slug: salonia/hero-booking
 * Categories: salonia
 * Description: Full-width salon hero with offer badge, headline and booking call-to-action buttons.
 *
 * @package Salonia
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-salon.jpg","dimRatio":55,"overlayColor":"charcoal","minHeight":640,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-charcoal-background-color has-background-dim-55 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Stylist blow-drying a client's hair at Salonia salon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-salon.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><span class="salonia-badge salonia-badge--gold salonia-pulse">✨ New guests save 20% on their first visit</span></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|display"},"color":{"text":"#ffffff"}}} -->
			<h1 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">Look radiant. Feel unstoppable.</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#f3e6e0"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#f3e6e0;font-size:1.25rem">Hair, nails, skin and spa rituals — crafted with care by certified stylists in the heart of the east end.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"typography":{"fontSize":"1.125rem"}}} -->
				<div class="wp-block-button" style="font-size:1.125rem"><a class="wp-block-button__link wp-element-button" href="/booking">💅 Book Your Appointment</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/services" style="color:#ffffff;border-color:#ffffff">Explore Services</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#e8b4b8"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#e8b4b8;font-size:0.95rem">★ 4.9/5 from 1,800+ glowing reviews &nbsp;·&nbsp; Certified stylists &nbsp;·&nbsp; Premium products</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
