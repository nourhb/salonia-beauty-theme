<?php
/**
 * Title: Salon gallery
 * Slug: salonia/gallery
 * Categories: salonia
 * Description: Photo gallery of real salon work — hair, spa, nails and the salon itself.
 *
 * @package Salonia
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#9d4e5c"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#9d4e5c;font-size:0.9rem;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">The salon</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"color":{"text":"#2b2320"}}} -->
	<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#2b2320">Step inside Salonia</h2>
	<!-- /wp:heading -->
	<!-- wp:gallery {"columns":3,"linkTo":"none","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<figure class="wp-block-gallery has-nested-images columns-3" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/salon-interior.jpg" alt="Salonia salon interior with styling chairs and mirrors"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gallery-salon.jpg" alt="Salonia styling station"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gallery-spa.jpg" alt="Relaxing spa corner at Salonia"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-hair.jpg" alt="Hair styling in progress"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-nails.jpg" alt="Manicure close-up"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-massage.jpg" alt="Spa stones and towels"/></figure>
		<!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
