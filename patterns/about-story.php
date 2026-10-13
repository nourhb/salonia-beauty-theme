<?php
/**
 * Title: About story
 * Slug: salonia/about-story
 * Categories: salonia
 * Description: Salon story with photo, values and signature.
 *
 * @package Salonia
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"large","className":"is-style-soft-frame"} -->
			<figure class="wp-block-image size-large is-style-soft-frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-team.jpg" alt="The Salonia team at work in the salon"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#9d4e5c"}}} -->
			<p class="has-text-color" style="color:#9d4e5c;font-size:0.9rem;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Our story</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"color":{"text":"#2b2320"}}} -->
			<h2 class="wp-block-heading has-text-color" style="color:#2b2320">A decade of making Toronto glow</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#8a7672"}}} -->
			<p class="has-text-color" style="color:#8a7672">Salonia began in 2014 as a two-chair studio with one belief: a salon visit should feel like a ritual, not a transaction. Today our east-end salon is home to twelve certified artists, a full spa suite and thousands of loyal clients.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"color":{"text":"#8a7672"}}} -->
			<p class="has-text-color" style="color:#8a7672">We use clean, cruelty-free products, train every month on new techniques, and back every service with our love-it guarantee — a free touch-up within seven days.</p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"style":{"color":{"text":"#2b2320"}}} -->
			<ul class="has-text-color" style="color:#2b2320">
				<!-- wp:list-item -->
				<li>✓ Certified &amp; insured artists</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>✓ Clean, cruelty-free products</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>✓ 7-day love-it guarantee</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/team">Meet the Team</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
