<?php
/**
 * Title: Header
 * Slug: reclaim-the-web/header
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: no
 */
$reclaim_the_web_home_url = home_url( '/' );
$reclaim_the_web_blog_id  = (int) get_option( 'page_for_posts' );
$reclaim_the_web_blog_url = $reclaim_the_web_blog_id ? get_permalink( $reclaim_the_web_blog_id ) : $reclaim_the_web_home_url;
$reclaim_the_web_social_url = home_url( '/social/' );
$reclaim_the_web_site_name = trim( wp_strip_all_tags( get_bloginfo( 'name' ) ) );
$reclaim_the_web_initial   = '';

if ( '' !== $reclaim_the_web_site_name ) {
	$reclaim_the_web_initial = function_exists( 'mb_substr' ) ? mb_substr( $reclaim_the_web_site_name, 0, 1 ) : substr( $reclaim_the_web_site_name, 0, 1 );
	$reclaim_the_web_initial = function_exists( 'mb_strtoupper' ) ? mb_strtoupper( $reclaim_the_web_initial ) : strtoupper( $reclaim_the_web_initial );
}
?>
<!-- wp:html -->
<a class="skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'reclaim-the-web' ); ?></a>
<!-- /wp:html -->

<!-- wp:group {"className":"site-header","layout":{"type":"default"}} -->
<div class="wp-block-group site-header">
	<!-- wp:group {"className":"container nav-wrap","layout":{"type":"default"}} -->
	<div class="wp-block-group container nav-wrap">
		<!-- wp:group {"className":"site-branding","layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group site-branding">
			<!-- wp:site-logo {"width":40,"shouldSyncIcon":true,"isLink":true} /-->
			<?php if ( ! has_custom_logo() && '' !== $reclaim_the_web_initial ) : ?>
				<!-- wp:html -->
				<a class="site-branding__fallback-logo" href="<?php echo esc_url( $reclaim_the_web_home_url ); ?>" aria-label="<?php echo esc_attr__( 'Home', 'reclaim-the-web' ); ?>"><span aria-hidden="true"><?php echo esc_html( $reclaim_the_web_initial ); ?></span></a>
				<!-- /wp:html -->
			<?php endif; ?>
			<!-- wp:site-title {"className":"brand"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"overlayMenu":"never","className":"primary-navigation","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
			<!-- wp:navigation-link {"label":<?php echo wp_json_encode( esc_html__( 'Home', 'reclaim-the-web' ) ); ?>,"url":<?php echo wp_json_encode( $reclaim_the_web_home_url ); ?>,"kind":"custom","isTopLevelLink":true} /-->
			<!-- wp:navigation-link {"label":<?php echo wp_json_encode( esc_html__( 'Blog', 'reclaim-the-web' ) ); ?>,"url":<?php echo wp_json_encode( $reclaim_the_web_blog_url ); ?>,"kind":"custom","isTopLevelLink":true} /-->
			<!-- wp:navigation-link {"label":<?php echo wp_json_encode( esc_html__( 'Social', 'reclaim-the-web' ) ); ?>,"url":<?php echo wp_json_encode( $reclaim_the_web_social_url ); ?>,"kind":"custom","isTopLevelLink":true} /-->
		<!-- /wp:navigation -->

		<!-- wp:html -->
		<button
			class="theme-toggle"
			type="button"
			data-reclaim-theme-toggle
			data-reclaim-theme-label-dark="<?php echo esc_attr__( 'Dark', 'reclaim-the-web' ); ?>"
			data-reclaim-theme-label-light="<?php echo esc_attr__( 'Light', 'reclaim-the-web' ); ?>"
			data-reclaim-theme-aria-dark="<?php echo esc_attr__( 'Switch to dark mode', 'reclaim-the-web' ); ?>"
			data-reclaim-theme-aria-light="<?php echo esc_attr__( 'Switch to light mode', 'reclaim-the-web' ); ?>"
			aria-label="<?php echo esc_attr__( 'Switch to dark mode', 'reclaim-the-web' ); ?>"
			aria-pressed="false"
		>
			<span class="theme-toggle__icon" aria-hidden="true">☾</span>
			<span class="theme-toggle__text"><?php esc_html_e( 'Dark', 'reclaim-the-web' ); ?></span>
		</button>

		<button
			class="mobile-menu-toggle"
			type="button"
			data-reclaim-mobile-menu-toggle
			data-reclaim-mobile-menu-label-open="<?php echo esc_attr__( 'Open navigation menu', 'reclaim-the-web' ); ?>"
			data-reclaim-mobile-menu-label-close="<?php echo esc_attr__( 'Close navigation menu', 'reclaim-the-web' ); ?>"
			aria-expanded="false"
			aria-label="<?php echo esc_attr__( 'Open navigation menu', 'reclaim-the-web' ); ?>"
			hidden
		>
			<span class="mobile-menu-toggle__icon" aria-hidden="true"><span></span><span></span><span></span></span>
		</button>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="mobile-nav-backdrop" data-reclaim-mobile-nav-backdrop hidden></div>
<!-- /wp:html -->
