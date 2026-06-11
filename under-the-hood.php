<?php
/**
 * Title: Publishing map
 * Slug: reclaim-the-web/under-the-hood
 * Categories: text, reclaim-the-web
 */
?>
<!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"}} -->
<section class="wp-block-group page-hero">
	<!-- wp:group {"className":"container","layout":{"type":"default"}} -->
	<div class="wp-block-group container">
		<!-- wp:paragraph {"className":"eyebrow"} --><p class="eyebrow"><?php esc_html_e( 'Publishing map', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":1} --><h1><?php esc_html_e( 'A clear map for your publishing home.', 'reclaim-the-web' ); ?></h1><!-- /wp:heading -->
		<!-- wp:paragraph {"className":"lede"} --><p class="lede"><?php esc_html_e( 'This page maps the feeds, profiles, links, and reader paths around a standalone blog, publication, community, or open social presence.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section compact","layout":{"type":"default"}} -->
<section class="wp-block-group section compact">
	<!-- wp:group {"className":"container","layout":{"type":"default"}} -->
	<div class="wp-block-group container">
		<!-- wp:group {"tagName":"nav","className":"toc-card","layout":{"type":"default"}} -->
		<nav class="wp-block-group toc-card">
			<!-- wp:heading {"level":2,"anchor":"publishing-map-contents"} --><h2 id="publishing-map-contents"><?php esc_html_e( 'On this page', 'reclaim-the-web' ); ?></h2><!-- /wp:heading -->
			<!-- wp:list -->
			<ul><!-- wp:list-item --><li><a href="#architecture"><?php esc_html_e( 'Connection map', 'reclaim-the-web' ); ?></a></li><!-- /wp:list-item --><!-- wp:list-item --><li><a href="#lifecycle"><?php esc_html_e( 'Publishing lifecycle', 'reclaim-the-web' ); ?></a></li><!-- /wp:list-item --><!-- wp:list-item --><li><a href="#reference"><?php esc_html_e( 'Reference points', 'reclaim-the-web' ); ?></a></li><!-- /wp:list-item --><!-- wp:list-item --><li><a href="#maintenance"><?php esc_html_e( 'Maintenance', 'reclaim-the-web' ); ?></a></li><!-- /wp:list-item --></ul>
			<!-- /wp:list -->
		</nav>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section alt","anchor":"architecture","layout":{"type":"default"}} -->
<section class="wp-block-group section alt" id="architecture">
	<!-- wp:group {"className":"container","layout":{"type":"default"}} -->
	<div class="wp-block-group container">
		<!-- wp:group {"className":"panel","layout":{"type":"default"}} -->
		<div class="wp-block-group panel">
			<!-- wp:heading --><h2><?php esc_html_e( 'Connection map', 'reclaim-the-web' ); ?></h2><!-- /wp:heading -->
			<!-- wp:paragraph --><p><?php esc_html_e( 'A useful blog or social-media-aware site usually has a stable home, clear outward channels, and plain-language guidance for readers.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:group {"className":"diagram","layout":{"type":"default"}} -->
			<div class="wp-block-group diagram">
				<!-- wp:paragraph {"className":"diagram-box"} --><p class="diagram-box"><strong><?php esc_html_e( 'WordPress blog or site', 'reclaim-the-web' ); ?></strong><span><?php esc_html_e( 'Posts, pages, archives, feeds', 'reclaim-the-web' ); ?></span></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"diagram-arrow"} --><p class="diagram-arrow"><span aria-hidden="true">-&gt;</span></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"diagram-box"} --><p class="diagram-box"><strong><?php esc_html_e( 'Connection options', 'reclaim-the-web' ); ?></strong><span><?php esc_html_e( 'Feeds, links, profiles, follow paths', 'reclaim-the-web' ); ?></span></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"diagram-arrow"} --><p class="diagram-arrow"><span aria-hidden="true">-&gt;</span></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"diagram-box"} --><p class="diagram-box"><strong><?php esc_html_e( 'Reader paths', 'reclaim-the-web' ); ?></strong><span><?php esc_html_e( 'Subscriptions, replies, discovery, communities', 'reclaim-the-web' ); ?></span></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section","anchor":"lifecycle","layout":{"type":"default"}} -->
<section class="wp-block-group section" id="lifecycle">
	<!-- wp:group {"className":"container two-column","layout":{"type":"default"}} -->
	<div class="wp-block-group container two-column">
		<!-- wp:group {"className":"section-heading","layout":{"type":"default"}} -->
		<div class="wp-block-group section-heading"><!-- wp:heading --><h2><?php esc_html_e( 'Publishing lifecycle', 'reclaim-the-web' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'The path from draft to archive stays visible so contributors and readers know what to expect.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"timeline","layout":{"type":"default"}} -->
		<div class="wp-block-group timeline">
			<!-- wp:group {"className":"timeline-item","layout":{"type":"default"}} --><div class="wp-block-group timeline-item"><!-- wp:heading {"level":3} --><h3><?php esc_html_e( '1. Content starts here', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Posts, pages, notes, or updates are created in WordPress and remain available at canonical URLs.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group -->
			<!-- wp:group {"className":"timeline-item","layout":{"type":"default"}} --><div class="wp-block-group timeline-item"><!-- wp:heading {"level":3} --><h3><?php esc_html_e( '2. Channels carry signals', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Feeds, emails, profile links, open social networks, or social posts help readers discover that original content.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group -->
			<!-- wp:group {"className":"timeline-item","layout":{"type":"default"}} --><div class="wp-block-group timeline-item"><!-- wp:heading {"level":3} --><h3><?php esc_html_e( '3. The archive remains readable', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'Search, categories, tags, and evergreen pages help older work stay useful.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"panel","layout":{"type":"default"}} -->
		<div class="wp-block-group panel"><!-- wp:heading --><h2><?php esc_html_e( 'Connection choices', 'reclaim-the-web' ); ?></h2><!-- /wp:heading --><!-- wp:list {"className":"check-list"} --><ul class="check-list"><!-- wp:list-item --><li><?php esc_html_e( 'Posts and notes can travel through feeds, newsletters, profile links, or social channels.', 'reclaim-the-web' ); ?></li><!-- /wp:list-item --><!-- wp:list-item --><li><?php esc_html_e( 'Readers get clear choices for feeds, profiles, lists, and subscription paths.', 'reclaim-the-web' ); ?></li><!-- /wp:list-item --><!-- wp:list-item --><li><?php esc_html_e( 'Replies, corrections, and private messages have clear destinations.', 'reclaim-the-web' ); ?></li><!-- /wp:list-item --></ul><!-- /wp:list --></div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section alt","anchor":"reference","layout":{"type":"default"}} -->
<section class="wp-block-group section alt" id="reference">
	<!-- wp:group {"className":"container","layout":{"type":"default"}} -->
	<div class="wp-block-group container">
		<!-- wp:group {"className":"section-heading","layout":{"type":"default"}} --><div class="wp-block-group section-heading"><!-- wp:heading --><h2><?php esc_html_e( 'Reference points', 'reclaim-the-web' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'The reference table keeps practical site details in one scannable place.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group -->
		<!-- wp:table {"className":"table-wrap"} -->
		<figure class="wp-block-table table-wrap"><table><thead><tr><th scope="col"><?php esc_html_e( 'Area', 'reclaim-the-web' ); ?></th><th scope="col"><?php esc_html_e( 'Details', 'reclaim-the-web' ); ?></th></tr></thead><tbody><tr><td><?php esc_html_e( 'Canonical URLs', 'reclaim-the-web' ); ?></td><td><?php esc_html_e( 'Where original posts, pages, and archives live.', 'reclaim-the-web' ); ?></td></tr><tr><td><?php esc_html_e( 'Feeds', 'reclaim-the-web' ); ?></td><td><?php esc_html_e( 'RSS, newsletters, social feeds, or collection pages readers can follow.', 'reclaim-the-web' ); ?></td></tr><tr><td><?php esc_html_e( 'Identity', 'reclaim-the-web' ); ?></td><td><?php esc_html_e( 'Profiles, handles, authorship, verification, and contact expectations.', 'reclaim-the-web' ); ?></td></tr><tr><td><?php esc_html_e( 'Moderation', 'reclaim-the-web' ); ?></td><td><?php esc_html_e( 'How comments, replies, reports, and corrections are handled.', 'reclaim-the-web' ); ?></td></tr></tbody></table></figure>
		<!-- /wp:table -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section","anchor":"maintenance","layout":{"type":"default"}} -->
<section class="wp-block-group section" id="maintenance">
	<!-- wp:group {"className":"container","layout":{"type":"default"}} -->
	<div class="wp-block-group container">
		<!-- wp:group {"className":"section-heading","layout":{"type":"default"}} --><div class="wp-block-group section-heading"><!-- wp:paragraph {"className":"eyebrow"} --><p class="eyebrow"><?php esc_html_e( 'Maintenance', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --><!-- wp:heading --><h2><?php esc_html_e( 'Keep the map current', 'reclaim-the-web' ); ?></h2><!-- /wp:heading --><!-- wp:paragraph --><p><?php esc_html_e( 'A publishing map is most useful when it reflects the tools, channels, and norms you actually use today.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group -->
		<!-- wp:group {"className":"card-grid two","layout":{"type":"default"}} -->
		<div class="wp-block-group card-grid two">
			<!-- wp:group {"className":"panel","layout":{"type":"default"}} --><div class="wp-block-group panel"><!-- wp:heading {"level":3} --><h3><?php esc_html_e( 'Editorial checklist', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:list {"className":"check-list"} --><ul class="check-list"><!-- wp:list-item --><li><?php esc_html_e( 'Links and feeds are checked after major site changes.', 'reclaim-the-web' ); ?></li><!-- /wp:list-item --><!-- wp:list-item --><li><?php esc_html_e( 'Screenshots and examples stay current as workflows change.', 'reclaim-the-web' ); ?></li><!-- /wp:list-item --><!-- wp:list-item --><li><?php esc_html_e( 'Privacy and moderation notes stay visible.', 'reclaim-the-web' ); ?></li><!-- /wp:list-item --></ul><!-- /wp:list --></div><!-- /wp:group -->
			<!-- wp:group {"className":"panel","layout":{"type":"default"}} --><div class="wp-block-group panel"><!-- wp:heading {"level":3} --><h3><?php esc_html_e( 'Site checklist', 'reclaim-the-web' ); ?></h3><!-- /wp:heading --><!-- wp:list {"className":"clean-list"} --><ul class="clean-list"><!-- wp:list-item --><li><?php esc_html_e( 'Menus, template parts, and patterns match the current site.', 'reclaim-the-web' ); ?></li><!-- /wp:list-item --><!-- wp:list-item --><li><?php esc_html_e( 'Light and Dark styles remain readable after color changes.', 'reclaim-the-web' ); ?></li><!-- /wp:list-item --><!-- wp:list-item --><li><?php esc_html_e( 'Navigation and forms stay usable after layout changes.', 'reclaim-the-web' ); ?></li><!-- /wp:list-item --></ul><!-- /wp:list --></div><!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
