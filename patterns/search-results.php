<?php
/**
 * Title: Search results
 * Slug: reclaim-the-web/search-results
 * Categories: posts
 *
 * @package Reclaim_The_Web
 */
?>
<!-- wp:group {"className":"container","layout":{"type":"default"}} -->
<div class="wp-block-group container">
	<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
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
		<!-- wp:query-no-results -->
			<!-- wp:group {"className":"panel no-posts","layout":{"type":"default"}} -->
			<div class="wp-block-group panel no-posts">
				<!-- wp:heading {"level":2} -->
				<h2><?php esc_html_e( 'No results found', 'reclaim-the-web' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Try searching for another word or browse the latest posts.', 'reclaim-the-web' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:search {"label":<?php echo wp_json_encode( esc_html__( 'Search', 'reclaim-the-web' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( esc_html__( 'Search this site', 'reclaim-the-web' ) ); ?>,"buttonText":<?php echo wp_json_encode( esc_html__( 'Search', 'reclaim-the-web' ) ); ?>} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:query-no-results -->
		<!-- wp:query-pagination {"paginationArrow":"arrow","className":"pagination","layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
