<?php
/**
 * Title: Feed archive loop
 * Slug: reclaim-the-web/social-feed-archive
 * Categories: posts
 *
 * @package Reclaim_The_Web
 */
?>
<!-- wp:group {"className":"container social-feed-shell","layout":{"type":"default"}} -->
<div class="wp-block-group container social-feed-shell">
	<!-- wp:query {"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"className":"social-feed-stream","layout":{"type":"default"}} -->
			<!-- wp:group {"tagName":"article","className":"social-feed-post","layout":{"type":"default"}} -->
			<article class="wp-block-group social-feed-post">
				<!-- wp:group {"className":"social-feed-post__header","layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group social-feed-post__header">
					<!-- wp:post-author {"showAvatar":true,"showBio":false,"isLink":true,"avatarSize":40} /-->
					<!-- wp:post-date {"isLink":true} /-->
				</div>
				<!-- /wp:group -->
				<!-- wp:post-title {"isLink":true,"className":"social-feed-post__title"} /-->
				<!-- wp:post-excerpt {"moreText":<?php echo wp_json_encode( esc_html__( 'Open post', 'reclaim-the-web' ) ); ?>,"showMoreOnNewLine":false,"className":"social-feed-post__content"} /-->
				<!-- wp:post-featured-image {"isLink":true,"sizeSlug":"large","className":"social-feed-post__image"} /-->
				<!-- wp:group {"className":"social-feed-post__footer","layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group social-feed-post__footer">
					<!-- wp:post-terms {"term":"post_tag","prefix":"#"} /-->
				</div>
				<!-- /wp:group -->
			</article>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
		<!-- wp:query-pagination {"paginationArrow":"arrow","className":"pagination social-feed-pagination","layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
