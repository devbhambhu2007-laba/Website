<?php
/**
 * Title: Feed
 * Slug: reclaim-the-web/social-feed
 * Categories: posts, featured
 * Description: A narrow stream layout for short notes, links, and social-media-style updates.
 *
 * @package Reclaim_The_Web
 */
?>

<!-- wp:group {"tagName":"section","className":"section social-feed","layout":{"type":"default"}} -->
<section class="wp-block-group section social-feed">
	<!-- wp:group {"className":"container social-feed-hero","layout":{"type":"default"}} -->
	<div class="wp-block-group container social-feed-hero">
		<!-- wp:heading {"level":1} -->
		<h1><?php esc_html_e( 'Feed', 'reclaim-the-web' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"archive-description"} -->
		<p class="archive-description"><?php esc_html_e( 'Short notes, links, and social-media-style updates from this site.', 'reclaim-the-web' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"container social-feed-shell","layout":{"type":"default"}} -->
	<div class="wp-block-group container social-feed-shell">
		<!-- wp:query {"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
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
			<!-- wp:query-no-results -->
				<!-- wp:group {"className":"panel no-posts","layout":{"type":"default"}} -->
				<div class="wp-block-group panel no-posts">
					<!-- wp:heading {"level":2} -->
					<h2><?php esc_html_e( 'No posts yet', 'reclaim-the-web' ); ?></h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'New notes and updates will appear here.', 'reclaim-the-web' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			<!-- /wp:query-no-results -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
