<?php
/**
 * Title: Footer
 * Slug: reclaim-the-web/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: no
 */
$reclaim_the_web_home_url = home_url( '/' );
$reclaim_the_web_blog_id  = (int) get_option( 'page_for_posts' );
$reclaim_the_web_blog_url = $reclaim_the_web_blog_id ? get_permalink( $reclaim_the_web_blog_id ) : $reclaim_the_web_home_url;
?>
<!-- wp:group {"className":"site-footer","layout":{"type":"default"}} -->
<div class="wp-block-group site-footer">
	<!-- wp:group {"className":"container footer-grid","layout":{"type":"default"}} -->
	<div class="wp-block-group container footer-grid">
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:site-title {"className":"brand"} /-->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'A WordPress site for publishing from a place you control.', 'reclaim-the-web' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"overlayMenu":"never","className":"footer-links","layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} -->
			<!-- wp:navigation-link {"label":<?php echo wp_json_encode( esc_html__( 'Home', 'reclaim-the-web' ) ); ?>,"url":<?php echo wp_json_encode( $reclaim_the_web_home_url ); ?>,"kind":"custom","isTopLevelLink":true} /-->
			<!-- wp:navigation-link {"label":<?php echo wp_json_encode( esc_html__( 'Blog', 'reclaim-the-web' ) ); ?>,"url":<?php echo wp_json_encode( $reclaim_the_web_blog_url ); ?>,"kind":"custom","isTopLevelLink":true} /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
