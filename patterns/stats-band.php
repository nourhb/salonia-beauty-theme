<?php
/**
 * Title: Stats band
 * Slug: salonia/stats-band
 * Categories: salonia
 * Description: Animated counters — happy clients, rating, years, artists.
 *
 * @package Salonia
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#2b2320","text":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background has-text-color" style="background-color:#2b2320;color:#ffffff;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","className":"salonia-count","style":{"typography":{"fontSize":"2.75rem","fontWeight":"800"},"color":{"text":"#c9a227"}}} -->
			<p class="has-text-align-center salonia-count has-text-color" style="color:#c9a227;font-size:2.75rem;font-weight:800" data-count="18000" data-suffix="+">0</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#c9b8b2"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#c9b8b2;font-size:0.95rem">Happy clients</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","className":"salonia-count","style":{"typography":{"fontSize":"2.75rem","fontWeight":"800"},"color":{"text":"#c9a227"}}} -->
			<p class="has-text-align-center salonia-count has-text-color" style="color:#c9a227;font-size:2.75rem;font-weight:800" data-count="12" data-suffix="">0</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#c9b8b2"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#c9b8b2;font-size:0.95rem">Certified artists</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","className":"salonia-count","style":{"typography":{"fontSize":"2.75rem","fontWeight":"800"},"color":{"text":"#c9a227"}}} -->
			<p class="has-text-align-center salonia-count has-text-color" style="color:#c9a227;font-size:2.75rem;font-weight:800" data-count="12" data-suffix=" yrs">0</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#c9b8b2"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#c9b8b2;font-size:0.95rem">Pampering Toronto</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.75rem","fontWeight":"800"},"color":{"text":"#c9a227"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#c9a227;font-size:2.75rem;font-weight:800">4.9★</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#c9b8b2"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#c9b8b2;font-size:0.95rem">Average rating</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
