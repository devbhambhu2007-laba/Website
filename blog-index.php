<?php
/**
 * Title: Blog index
 * Slug: reclaim-the-web/blog-index
 * Categories: posts
 *
 * @package Reclaim_The_Web
 */
?>
<!-- wp:group {"className":"container archive-hero","layout":{"type":"default"}} -->
<div class="wp-block-group container archive-hero">
	<!-- wp:heading {"level":1} -->
	<h1><?php esc_html_e( 'Latest posts', 'reclaim-the-web' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"className":"archive-description"} -->
	<p class="archive-description"><?php esc_html_e( 'Updates, essays, and notes from this site.', 'reclaim-the-web' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"container","layout":{"type":"default"}} -->
<div class="wp-block-group container">
	<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"className":"post-archive-grid","layout":{"type":"default"}} -->
			<!-- wp:group {"tagName":"article","className":"post-summary","layout":{"type":"default"}} -->
			<article class="wp-block-group post-summary">
				<!-- wp:post-title {"isLink":true} /-->
				<!-- wp:group {"className":"post-meta post-summary__meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group post-meta post-summary__meta">
					<!-- wp:post-date /-->
					<!-- wp:post-terms {"term":"category","prefix":<?php echo wp_json_encode( esc_html__( 'In ', 'reclaim-the-web' ) ); ?>} /-->
				</div>
				<!-- /wp:group -->
				<!-- wp:post-excerpt {"moreText":<?php echo wp_json_encode( esc_html__( 'Read more', 'reclaim-the-web' ) ); ?>,"className":"post-summary__excerpt"} /-->
			</article>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
		<!-- wp:query-pagination {"paginationArrow":"arrow","className":"pagination","layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
