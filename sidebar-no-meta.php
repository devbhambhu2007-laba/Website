<?php
/**
 * Title: Sidebar without post details
 * Slug: reclaim-the-web/sidebar-no-meta
 * Categories: sidebar
 * Block Types: core/template-part/sidebar
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"aside","className":"post-sidebar","layout":{"type":"default"}} -->
<aside class="wp-block-group post-sidebar">
	<!-- wp:group {"className":"post-sidebar__widget","layout":{"type":"default"}} -->
	<div class="wp-block-group post-sidebar__widget">
		<!-- wp:heading {"level":2,"className":"post-sidebar__widget-title"} -->
		<h2 class="wp-block-heading post-sidebar__widget-title"><?php esc_html_e( 'Latest posts', 'reclaim-the-web' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:latest-posts {"postsToShow":5,"displayPostDate":true} /-->
	</div>
	<!-- /wp:group -->
</aside>
<!-- /wp:group -->
