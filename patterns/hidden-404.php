<?php
/**
 * Title: 404
 * Slug: reclaim-the-web/hidden-404
 * Categories: hidden
 * Inserter: no
 */
$reclaim_the_web_home_url = home_url( '/' );
?>
<!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"}} -->
<section class="wp-block-group page-hero">
	<!-- wp:group {"className":"container","layout":{"type":"default"}} -->
	<div class="wp-block-group container">
		<!-- wp:paragraph {"className":"eyebrow"} --><p class="eyebrow"><?php esc_html_e( 'Page not found', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":1} --><h1><?php esc_html_e( 'This page could not be found.', 'reclaim-the-web' ); ?></h1><!-- /wp:heading -->
		<!-- wp:paragraph {"className":"lede"} --><p class="lede"><?php esc_html_e( 'Try searching or return to the homepage.', 'reclaim-the-web' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:group {"className":"cta-row","layout":{"type":"default"}} -->
		<div class="wp-block-group cta-row">
			<!-- wp:paragraph --><p><a class="button primary" href="<?php echo esc_url( $reclaim_the_web_home_url ); ?>"><?php esc_html_e( 'Home', 'reclaim-the-web' ); ?></a></p><!-- /wp:paragraph -->
			<!-- wp:search {"label":<?php echo wp_json_encode( esc_html__( 'Search', 'reclaim-the-web' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( esc_html__( 'Search this site', 'reclaim-the-web' ) ); ?>,"buttonText":<?php echo wp_json_encode( esc_html__( 'Search', 'reclaim-the-web' ) ); ?>} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
