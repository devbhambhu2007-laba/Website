<?php
/**
 * Title: Sidebar
 * Slug: reclaim-the-web/sidebar
 * Categories: sidebar
 * Block Types: core/template-part/sidebar
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"aside","className":"post-sidebar","layout":{"type":"default"}} -->
<aside class="wp-block-group post-sidebar">
	<!-- wp:group {"className":"post-sidebar__section post-sidebar__meta","layout":{"type":"default"}} -->
	<div class="wp-block-group post-sidebar__section post-sidebar__meta">
		<!-- wp:heading {"level":2,"className":"post-sidebar__title"} -->
		<h2 class="wp-block-heading post-sidebar__title"><?php esc_html_e( 'Post details', 'reclaim-the-web' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:group {"className":"post-meta","layout":{"type":"default"}} -->
		<div class="wp-block-group post-meta">
			<!-- wp:post-date /-->
			<!-- wp:post-terms {"term":"category","prefix":<?php echo wp_json_encode( esc_html__( 'Categories: ', 'reclaim-the-web' ) ); ?>} /-->
			<!-- wp:post-terms {"term":"post_tag","prefix":<?php echo wp_json_encode( esc_html__( 'Tags: ', 'reclaim-the-web' ) ); ?>} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

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
