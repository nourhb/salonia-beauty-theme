<?php
/**
 * Title: Services grid
 * Slug: salonia/services-grid
 * Categories: salonia
 * Description: Six salon service cards with real photos and pricing hints — hair, nails, spa.
 *
 * @package Salonia
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#9d4e5c"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#9d4e5c;font-size:0.9rem;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Our services</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"color":{"text":"#2b2320"}}} -->
	<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#2b2320">Rituals for every glow</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#8a7672"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<p class="has-text-align-center has-text-color" style="color:#8a7672;margin-bottom:var(--wp--preset--spacing--50)">From a quick refresh to a full day of pampering — transparent pricing, no surprises.</p>
	<!-- /wp:paragraph -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"salonia-card","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"shadow":"var:preset|shadow|card","spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group salonia-card has-background has-shadow" style="background-color:#ffffff;border-radius:12px;box-shadow:var(--wp--preset--shadow--card);padding-top:0;padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:image {"aspectRatio":"16/10","sizeSlug":"large","style":{"border":{"radius":"12px 12px 0 0"}}} -->
				<figure class="wp-block-image size-large" style="border-radius:12px 12px 0 0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-hair.jpg" alt="Stylist cutting and styling a client's hair"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#2b2320"}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#2b2320;font-size:1.25rem">💇 Haircuts &amp; Styling</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#8a7672"}}} -->
					<p class="has-text-color" style="color:#8a7672;font-size:0.95rem">Precision cuts, blowouts and occasion styling for every hair type.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"700"},"color":{"text":"#9d4e5c"}}} -->
					<p class="has-text-color" style="color:#9d4e5c;font-size:0.95rem;font-weight:700">From $45 · 45–60 min</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"salonia-card","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"shadow":"var:preset|shadow|card","spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group salonia-card has-background has-shadow" style="background-color:#ffffff;border-radius:12px;box-shadow:var(--wp--preset--shadow--card);padding-top:0;padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:image {"aspectRatio":"16/10","sizeSlug":"large","style":{"border":{"radius":"12px 12px 0 0"}}} -->
				<figure class="wp-block-image size-large" style="border-radius:12px 12px 0 0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-color.jpg" alt="Stylist applying hair colour with foils"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#2b2320"}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#2b2320;font-size:1.25rem">🎨 Colour &amp; Balayage</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#8a7672"}}} -->
					<p class="has-text-color" style="color:#8a7672;font-size:0.95rem">Dimensional colour, balayage and glossing with ammonia-free formulas.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"700"},"color":{"text":"#9d4e5c"}}} -->
					<p class="has-text-color" style="color:#9d4e5c;font-size:0.95rem;font-weight:700">From $95 · Free consult</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"salonia-card","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"shadow":"var:preset|shadow|card","spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group salonia-card has-background has-shadow" style="background-color:#ffffff;border-radius:12px;box-shadow:var(--wp--preset--shadow--card);padding-top:0;padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:image {"aspectRatio":"16/10","sizeSlug":"large","style":{"border":{"radius":"12px 12px 0 0"}}} -->
				<figure class="wp-block-image size-large" style="border-radius:12px 12px 0 0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-nails.jpg" alt="Manicure with polished nails at Salonia"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#2b2320"}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#2b2320;font-size:1.25rem">💅 Manicure &amp; Pedicure</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#8a7672"}}} -->
					<p class="has-text-color" style="color:#8a7672;font-size:0.95rem">Gel, shellac and spa pedicures with meticulous cuticle care.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"700"},"color":{"text":"#9d4e5c"}}} -->
					<p class="has-text-color" style="color:#9d4e5c;font-size:0.95rem;font-weight:700">From $35 · 30–75 min</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"salonia-card","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"shadow":"var:preset|shadow|card","spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group salonia-card has-background has-shadow" style="background-color:#ffffff;border-radius:12px;box-shadow:var(--wp--preset--shadow--card);padding-top:0;padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:image {"aspectRatio":"16/10","sizeSlug":"large","style":{"border":{"radius":"12px 12px 0 0"}}} -->
				<figure class="wp-block-image size-large" style="border-radius:12px 12px 0 0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-facial.jpg" alt="Relaxing facial treatment at Salonia spa"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#2b2320"}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#2b2320;font-size:1.25rem">🌸 Facials &amp; Skin</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#8a7672"}}} -->
					<p class="has-text-color" style="color:#8a7672;font-size:0.95rem">Deep-cleansing facials, glow treatments and anti-age rituals.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"700"},"color":{"text":"#9d4e5c"}}} -->
					<p class="has-text-color" style="color:#9d4e5c;font-size:0.95rem;font-weight:700">From $65 · 60 min</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"salonia-card","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"shadow":"var:preset|shadow|card","spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group salonia-card has-background has-shadow" style="background-color:#ffffff;border-radius:12px;box-shadow:var(--wp--preset--shadow--card);padding-top:0;padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:image {"aspectRatio":"16/10","sizeSlug":"large","style":{"border":{"radius":"12px 12px 0 0"}}} -->
				<figure class="wp-block-image size-large" style="border-radius:12px 12px 0 0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-massage.jpg" alt="Hot stone massage with towels and candles"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#2b2320"}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#2b2320;font-size:1.25rem">🕯️ Massage &amp; Spa</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#8a7672"}}} -->
					<p class="has-text-color" style="color:#8a7672;font-size:0.95rem">Hot-stone, deep-tissue and aromatherapy massages to melt stress.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"700"},"color":{"text":"#9d4e5c"}}} -->
					<p class="has-text-color" style="color:#9d4e5c;font-size:0.95rem;font-weight:700">From $75 · 60–90 min</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"salonia-card","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"shadow":"var:preset|shadow|card","spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group salonia-card has-background has-shadow" style="background-color:#ffffff;border-radius:12px;box-shadow:var(--wp--preset--shadow--card);padding-top:0;padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:image {"aspectRatio":"16/10","sizeSlug":"large","style":{"border":{"radius":"12px 12px 0 0"}}} -->
				<figure class="wp-block-image size-large" style="border-radius:12px 12px 0 0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/service-makeup.jpg" alt="Makeup artist applying makeup to a model"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#2b2320"}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#2b2320;font-size:1.25rem">✨ Makeup &amp; Bridal</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#8a7672"}}} -->
					<p class="has-text-color" style="color:#8a7672;font-size:0.95rem">Event makeup, trials and full bridal party packages.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"700"},"color":{"text":"#9d4e5c"}}} -->
					<p class="has-text-color" style="color:#9d4e5c;font-size:0.95rem;font-weight:700">From $55 · Bridal from $250</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
