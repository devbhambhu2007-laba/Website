<?php
/**
 * Title: Publishing home
 * Slug: reclaim-the-web/home
 * Categories: featured, reclaim-the-web
 */
?>
<!-- wp:group {"tagName":"section","className":"hero","layout":{"type":"default"}} -->
<section class="wp-block-group hero">
	<!-- wp:group {"className":"container hero-grid","layout":{"type":"default"}} -->
	<div class="wp-block-group container hero-grid">
		<!-- wp:group {"className":"hero-copy","layout":{"type":"default"}} -->
		<div class="wp-block-group hero-copy">
			<!-- wp:paragraph {"className":"eyebrow"} -->
			<p class="eyebrow"><?php esc_html_e( 'A theme for blogs and open publishing', 'reclaim-the-web' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1} -->
			<h1><?php echo wp_kses( sprintf(
				/* translators: 1: opening decorative span tag, 2: closing span tag, 3: opening decorative span tag, 4: closing span tag. */
				__( 'A publishing home for %1$sblogs%2$s and the open %3$ssocial web%4$s.', 'reclaim-the-web' ),
				'<span class="hero-emphasis hero-emphasis--blogs">',
				'</span>',
				'<span class="hero-emphasis hero-emphasis--social-web">',
				'</span>'
			), array( 'span' => array( 'class' => array() ) ) ); ?></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"lede"} -->
			<p class="lede"><?php esc_html_e( 'A flexible homepage for posts, notes, feeds, and social paths that begin from your own site.', 'reclaim-the-web' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"className":"cta-row","layout":{"type":"default"}} -->
			<div class="wp-block-group cta-row">
				<!-- wp:paragraph -->
				<p><a class="button primary" href="#simple-version"><?php esc_html_e( 'Start with the idea', 'reclaim-the-web' ); ?></a></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><a class="button secondary" href="#who-its-for"><?php esc_html_e( 'Plan your paths', 'reclaim-the-web' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"hero-card","layout":{"type":"default"}} -->
		<div class="wp-block-group hero-card">
			<!-- wp:group {"className":"signal-map","layout":{"type":"default"}} -->
			<div class="wp-block-group signal-map">
				<!-- wp:group {"className":"node home","layout":{"type":"default"}} -->
				<div class="wp-block-group node home">
					<!-- wp:paragraph {"className":"node-icon is-symbol"} --><p class="node-icon is-symbol"><span class="dashicons dashicons-wordpress" aria-hidden="true"></span></p><!-- /wp:paragraph -->
					<!-- wp:group {"className":"node-copy","layout":{"type":"default"}} -->
					<div class="wp-block-group node-copy">
						<!-- wp:paragraph {"className":"node-title"} --><p class="node-title"><strong><?php esc_html_e( 'You publish once', 'reclaim-the-web' ); ?></strong></p><!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"node-description"} --><p class="node-description"><?php esc_html_e( 'Your post starts on your WordPress blog or site.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"connector","layout":{"type":"default"}} --><div class="wp-block-group connector"></div><!-- /wp:group -->
				<!-- wp:group {"className":"node route","layout":{"type":"default"}} -->
				<div class="wp-block-group node route">
					<!-- wp:paragraph {"className":"node-icon is-symbol"} --><p class="node-icon is-symbol"><span class="dashicons dashicons-admin-site" aria-hidden="true"></span></p><!-- /wp:paragraph -->
					<!-- wp:group {"className":"node-copy","layout":{"type":"default"}} -->
					<div class="wp-block-group node-copy">
						<!-- wp:paragraph {"className":"node-title"} --><p class="node-title"><strong><?php esc_html_e( 'Your site shows the paths', 'reclaim-the-web' ); ?></strong></p><!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"node-description"} --><p class="node-description"><?php esc_html_e( 'Pages, patterns, and navigation stay editable as your needs change.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"connector","layout":{"type":"default"}} --><div class="wp-block-group connector"></div><!-- /wp:group -->
				<!-- wp:group {"className":"destination-grid","layout":{"type":"default"}} -->
				<div class="wp-block-group destination-grid">
					<!-- wp:group {"className":"node destination-node destination-node--social","layout":{"type":"default"}} -->
					<div class="wp-block-group node destination-node destination-node--social">
						<!-- wp:paragraph {"className":"node-icon is-symbol"} --><p class="node-icon is-symbol"><span class="dashicons dashicons-share" aria-hidden="true"></span></p><!-- /wp:paragraph -->
						<!-- wp:group {"className":"node-copy","layout":{"type":"default"}} -->
						<div class="wp-block-group node-copy">
							<!-- wp:paragraph {"className":"node-title"} --><p class="node-title"><strong><?php esc_html_e( 'Social channels', 'reclaim-the-web' ); ?></strong></p><!-- /wp:paragraph -->
							<!-- wp:paragraph {"className":"node-description"} --><p class="node-description"><?php esc_html_e( 'Point readers to federated apps, handles, and profiles.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"node destination-node destination-node--rss","layout":{"type":"default"}} -->
					<div class="wp-block-group node destination-node destination-node--rss">
						<!-- wp:paragraph {"className":"node-icon is-symbol"} --><p class="node-icon is-symbol"><span class="dashicons dashicons-rss" aria-hidden="true"></span></p><!-- /wp:paragraph -->
						<!-- wp:group {"className":"node-copy","layout":{"type":"default"}} -->
						<div class="wp-block-group node-copy">
							<!-- wp:paragraph {"className":"node-title"} --><p class="node-title"><strong><?php esc_html_e( 'Feeds and RSS', 'reclaim-the-web' ); ?></strong></p><!-- /wp:paragraph -->
							<!-- wp:paragraph {"className":"node-description"} --><p class="node-description"><?php esc_html_e( 'Keep posts subscribable from your site.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"container status-notice","layout":{"type":"default"}} -->
	<div class="wp-block-group container status-notice">
		<!-- wp:paragraph {"className":"status-notice__label"} --><p class="status-notice__label"><?php esc_html_e( 'Publishing home', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph --><p><?php esc_html_e( 'Posts, profiles, feeds, and follow paths all point back to one home base.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"status-notice__links"} --><p class="status-notice__links"><a href="#simple-version"><?php esc_html_e( 'Simple version', 'reclaim-the-web' ); ?></a><a href="#glossary"><?php esc_html_e( 'Glossary', 'reclaim-the-web' ); ?></a></p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section","anchor":"simple-version","layout":{"type":"default"}} -->
<section class="wp-block-group section" id="simple-version">
	<!-- wp:group {"className":"container","layout":{"type":"default"}} -->
	<div class="wp-block-group container">
		<!-- wp:group {"className":"section-heading center","layout":{"type":"default"}} -->
		<div class="wp-block-group section-heading center">
			<!-- wp:heading --><h2><?php esc_html_e( 'The simple version', 'reclaim-the-web' ); ?></h2><!-- /wp:heading -->
			<!-- wp:paragraph --><p><?php esc_html_e( 'Your own domain can be the durable home for a blog, media stream, or publication.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"card-grid","layout":{"type":"default"}} -->
		<div class="wp-block-group card-grid">
			<!-- wp:group {"tagName":"article","className":"card","layout":{"type":"default"}} --><article class="wp-block-group card"><!-- wp:paragraph {"className":"card-icon is-symbol"} --><p class="card-icon is-symbol"><span class="dashicons dashicons-admin-home" aria-hidden="true"></span></p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3><?php esc_html_e( 'Your blog stays home base', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Keep the original post, page, note, or update on a domain you control.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></article><!-- /wp:group -->
			<!-- wp:group {"tagName":"article","className":"card","layout":{"type":"default"}} --><article class="wp-block-group card"><!-- wp:paragraph {"className":"card-icon is-symbol"} --><p class="card-icon is-symbol"><span class="dashicons dashicons-share-alt" aria-hidden="true"></span></p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3><?php esc_html_e( 'Connections stay understandable', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Readers can follow, subscribe, reply, or find your work elsewhere without losing the original source.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></article><!-- /wp:group -->
			<!-- wp:group {"tagName":"article","className":"card","layout":{"type":"default"}} --><article class="wp-block-group card"><!-- wp:paragraph {"className":"card-icon is-symbol"} --><p class="card-icon is-symbol"><span class="dashicons dashicons-edit" aria-hidden="true"></span></p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3><?php esc_html_e( 'Everything remains editable', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Blocks, cards, layouts, navigation, and colors can evolve as the site grows.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></article><!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section alt","layout":{"type":"default"}} -->
<section class="wp-block-group section alt">
	<!-- wp:group {"className":"container","layout":{"type":"default"}} -->
	<div class="wp-block-group container">
		<!-- wp:group {"className":"section-heading","layout":{"type":"default"}} --><div class="wp-block-group section-heading"><!-- wp:heading --><h2><?php esc_html_e( 'How it works', 'reclaim-the-web' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'A clear structure connects standalone blogging, social media, and the paths between them.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group -->
		<!-- wp:group {"className":"steps","layout":{"type":"default"}} -->
		<div class="wp-block-group steps">
			<!-- wp:group {"className":"step","layout":{"type":"default"}} --><div class="wp-block-group step"><!-- wp:heading {"level":3} --><h3><?php esc_html_e( 'Choose your home', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'The blog, site, publication, or community has one recognizable starting point.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group -->
			<!-- wp:group {"className":"step","layout":{"type":"default"}} --><div class="wp-block-group step"><!-- wp:heading {"level":3} --><h3><?php esc_html_e( 'Show the paths', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Readers can follow, subscribe, share, or respond from the channels that fit them.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group -->
			<!-- wp:group {"className":"step","layout":{"type":"default"}} --><div class="wp-block-group step"><!-- wp:heading {"level":3} --><h3><?php esc_html_e( 'Publish in WordPress', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Keep using posts, pages, patterns, and blocks you already know.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group -->
			<!-- wp:group {"className":"step","layout":{"type":"default"}} --><div class="wp-block-group step"><!-- wp:heading {"level":3} --><h3><?php esc_html_e( 'Revise openly', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'The explanation can evolve as protocols, tools, and audiences change.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section","anchor":"who-its-for","layout":{"type":"default"}} -->
<section class="wp-block-group section" id="who-its-for">
	<!-- wp:group {"className":"container","layout":{"type":"default"}} -->
	<div class="wp-block-group container">
		<!-- wp:group {"className":"section-heading center","layout":{"type":"default"}} --><div class="wp-block-group section-heading center"><!-- wp:heading --><h2><?php esc_html_e( 'Who this site is for', 'reclaim-the-web' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'The layout works for people and groups publishing from a place they control.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group -->
		<!-- wp:group {"className":"card-grid","layout":{"type":"default"}} -->
		<div class="wp-block-group card-grid">
			<!-- wp:group {"tagName":"article","className":"card","layout":{"type":"default"}} --><article class="wp-block-group card"><!-- wp:paragraph {"className":"card-icon is-symbol"} --><p class="card-icon is-symbol"><span class="dashicons dashicons-welcome-write-blog" aria-hidden="true"></span></p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3><?php esc_html_e( 'Bloggers and writers', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Keep a standalone blog as the source of truth while staying discoverable in more places.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></article><!-- /wp:group -->
			<!-- wp:group {"tagName":"article","className":"card","layout":{"type":"default"}} --><article class="wp-block-group card"><!-- wp:paragraph {"className":"card-icon is-symbol"} --><p class="card-icon is-symbol"><span class="dashicons dashicons-share-alt2" aria-hidden="true"></span></p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3><?php esc_html_e( 'Social media publishers', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Give readers a clear explanation of where your work lives, where it appears, and how people can follow along.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></article><!-- /wp:group -->
			<!-- wp:group {"tagName":"article","className":"card","layout":{"type":"default"}} --><article class="wp-block-group card"><!-- wp:paragraph {"className":"card-icon is-symbol"} --><p class="card-icon is-symbol"><span class="dashicons dashicons-groups" aria-hidden="true"></span></p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3><?php esc_html_e( 'Communities', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Document norms, identity, feeds, and participation without locking the story into one network.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></article><!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section","layout":{"type":"default"}} -->
<section class="wp-block-group section">
	<!-- wp:group {"className":"container two-column","layout":{"type":"default"}} -->
	<div class="wp-block-group container two-column">
		<!-- wp:group {"className":"section-heading","layout":{"type":"default"}} --><div class="wp-block-group section-heading"><!-- wp:paragraph {"className":"eyebrow"} --><p class="eyebrow"><?php esc_html_e( 'What readers can find', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --><!-- wp:heading --><h2><?php esc_html_e( 'Friendly on the surface. Serious underneath.', 'reclaim-the-web' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Plain-language sections can cover blogging, social media, identity, moderation, portability, and archive choices.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph {"className":"badge-row"} --><p class="badge-row"><span class="badge"><?php esc_html_e( 'Publishing', 'reclaim-the-web' ); ?></span><span class="badge"><?php esc_html_e( 'Identity', 'reclaim-the-web' ); ?></span><span class="badge"><?php esc_html_e( 'Conversation', 'reclaim-the-web' ); ?></span><span class="badge"><?php esc_html_e( 'Portability', 'reclaim-the-web' ); ?></span></p><!-- /wp:paragraph --></div><!-- /wp:group -->
		<!-- wp:group {"className":"feature-list","layout":{"type":"default"}} -->
		<div class="wp-block-group feature-list">
			<!-- wp:group {"tagName":"article","className":"feature","layout":{"type":"default"}} --><article class="wp-block-group feature"><!-- wp:paragraph {"className":"kicker"} --><p class="kicker"><?php esc_html_e( 'Publishing', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3><?php esc_html_e( 'Where posts begin', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Readers can see which content starts here and how often it appears.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></article><!-- /wp:group -->
			<!-- wp:group {"tagName":"article","className":"feature","layout":{"type":"default"}} --><article class="wp-block-group feature"><!-- wp:paragraph {"className":"kicker"} --><p class="kicker"><?php esc_html_e( 'Identity', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3><?php esc_html_e( 'How to recognize you', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Handles, bylines, profiles, feeds, and verification signals stay easy to find.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></article><!-- /wp:group -->
			<!-- wp:group {"tagName":"article","className":"feature","layout":{"type":"default"}} --><article class="wp-block-group feature"><!-- wp:paragraph {"className":"kicker"} --><p class="kicker"><?php esc_html_e( 'Conversation', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3><?php esc_html_e( 'How replies work', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Set expectations for comments, mentions, email, or other response channels.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></article><!-- /wp:group -->
			<!-- wp:group {"tagName":"article","className":"feature","layout":{"type":"default"}} --><article class="wp-block-group feature"><!-- wp:paragraph {"className":"kicker"} --><p class="kicker"><?php esc_html_e( 'Portability', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3><?php esc_html_e( 'What remains yours', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Ownership, exports, archives, and lasting links stay visible.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></article><!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section alt","anchor":"glossary","layout":{"type":"default"}} -->
<section class="wp-block-group section alt" id="glossary">
	<!-- wp:group {"className":"container","layout":{"type":"default"}} -->
	<div class="wp-block-group container">
		<!-- wp:group {"className":"section-heading","layout":{"type":"default"}} --><div class="wp-block-group section-heading"><!-- wp:paragraph {"className":"eyebrow"} --><p class="eyebrow"><?php esc_html_e( 'Glossary', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --><!-- wp:heading --><h2><?php esc_html_e( 'A small glossary for humans', 'reclaim-the-web' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Short explanations help visitors understand the publishing choices behind the site.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group -->
		<!-- wp:group {"className":"feature-list glossary-list","layout":{"type":"default"}} -->
		<div class="wp-block-group feature-list glossary-list">
			<!-- wp:group {"tagName":"article","className":"feature","layout":{"type":"default"}} --><article class="wp-block-group feature"><!-- wp:heading {"level":3,"className":"glossary-term"} --><h3 class="wp-block-heading glossary-term"><?php esc_html_e( 'Social Web', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"className":"glossary-summary"} --><p class="glossary-summary"><?php esc_html_e( 'Sites and apps can talk to each other', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph --><p><?php esc_html_e( 'People can follow, read, reply, and share across services instead of staying inside one network.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></article><!-- /wp:group -->
			<!-- wp:group {"tagName":"article","className":"feature","layout":{"type":"default"}} --><article class="wp-block-group feature"><!-- wp:heading {"level":3,"className":"glossary-term"} --><h3 class="wp-block-heading glossary-term"><?php esc_html_e( 'ActivityPub', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"className":"glossary-summary"} --><p class="glossary-summary"><?php esc_html_e( 'A protocol behind many Fediverse apps', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph --><p><?php esc_html_e( 'ActivityPub helps independent servers exchange posts, follows, and replies.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></article><!-- /wp:group -->
			<!-- wp:group {"tagName":"article","className":"feature","layout":{"type":"default"}} --><article class="wp-block-group feature"><!-- wp:heading {"level":3,"className":"glossary-term"} --><h3 class="wp-block-heading glossary-term"><?php esc_html_e( 'AT Protocol', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"className":"glossary-summary"} --><p class="glossary-summary"><?php esc_html_e( 'A protocol for portable identity and apps', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph --><p><?php esc_html_e( 'AT Protocol separates parts of identity, data, and application experience so they can move independently.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></article><!-- /wp:group -->
			<!-- wp:group {"tagName":"article","className":"feature","layout":{"type":"default"}} --><article class="wp-block-group feature"><!-- wp:heading {"level":3,"className":"glossary-term"} --><h3 class="wp-block-heading glossary-term"><?php esc_html_e( 'POSSE', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"className":"glossary-summary"} --><p class="glossary-summary"><?php esc_html_e( 'Publish Own Site, Syndicate Elsewhere', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph --><p><?php esc_html_e( 'The original stays on your site while copies, excerpts, or links can appear elsewhere.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></article><!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section","anchor":"get-involved","layout":{"type":"default"}} -->
<section class="wp-block-group section" id="get-involved">
	<!-- wp:group {"className":"container","layout":{"type":"default"}} -->
	<div class="wp-block-group container">
		<!-- wp:group {"className":"callout split","layout":{"type":"default"}} -->
		<div class="wp-block-group callout split">
			<!-- wp:group {"layout":{"type":"default"}} --><div class="wp-block-group"><!-- wp:paragraph {"className":"eyebrow"} --><p class="eyebrow"><?php esc_html_e( 'Next step', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --><!-- wp:heading --><h2><?php esc_html_e( 'A blog and social home can grow from here.', 'reclaim-the-web' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Posts, pages, feeds, social profiles, guides, and response paths can all point back to this site.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group -->
			<!-- wp:group {"className":"cta-row compact","layout":{"type":"default"}} --><div class="wp-block-group cta-row compact"><!-- wp:paragraph --><p><a class="button primary" href="#simple-version"><?php esc_html_e( 'Simple version', 'reclaim-the-web' ); ?></a></p><!-- /wp:paragraph --><!-- wp:paragraph --><p><a class="button secondary" href="#who-its-for"><?php esc_html_e( 'Audience', 'reclaim-the-web' ); ?></a></p><!-- /wp:paragraph --><!-- wp:paragraph --><p><a class="button secondary" href="#glossary"><?php esc_html_e( 'Glossary', 'reclaim-the-web' ); ?></a></p><!-- /wp:paragraph --></div><!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
