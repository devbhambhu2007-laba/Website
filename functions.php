<?php
/**
 * Theme bootstrap for Reclaim the Web.
 *
 * @package Reclaim_The_Web
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Set up block theme supports and editor assets.
 */
function reclaim_the_web_setup() {
	load_theme_textdomain( 'reclaim-the-web', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'status' ) );

	add_editor_style( 'assets/css/theme.css' );
}
add_action( 'after_setup_theme', 'reclaim_the_web_setup' );

/**
 * Register theme-specific block styles.
 */
function reclaim_the_web_register_block_styles() {
	register_block_style(
		'core/code',
		array(
			'name'  => 'reclaim-the-web',
			'label' => __( 'Retro Code', 'reclaim-the-web' ),
		)
	);
}
add_action( 'init', 'reclaim_the_web_register_block_styles' );

/**
 * Register a compact reusable block pattern.
 */
function reclaim_the_web_register_block_patterns() {
	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category(
			'reclaim-the-web',
			array( 'label' => __( 'Reclaim the Web', 'reclaim-the-web' ) )
		);
	}

	if ( ! function_exists( 'register_block_pattern' ) ) {
		return;
	}

	$reclaim_the_web_social_paths_content = implode(
		'',
		array(
			'<!-- wp:group {"className":"callout split","layout":{"type":"default"}} -->',
			'<div class="wp-block-group callout split">',
			'<!-- wp:group {"layout":{"type":"default"}} -->',
			'<div class="wp-block-group">',
			'<!-- wp:paragraph {"className":"eyebrow"} --><p class="eyebrow">' . esc_html__( 'Follow paths', 'reclaim-the-web' ) . '</p><!-- /wp:paragraph -->',
			'<!-- wp:heading --><h2 class="wp-block-heading">' . esc_html__( 'Show readers where else they can follow along.', 'reclaim-the-web' ) . '</h2><!-- /wp:heading -->',
			'<!-- wp:paragraph --><p>' . esc_html__( 'Find the feeds, profiles, newsletters, archives, and other places these posts appear.', 'reclaim-the-web' ) . '</p><!-- /wp:paragraph -->',
			'</div><!-- /wp:group -->',
			'<!-- wp:buttons {"className":"cta-row compact"} -->',
			'<div class="wp-block-buttons cta-row compact">',
			'<!-- wp:button {"className":"primary"} --><div class="wp-block-button primary"><a class="wp-block-button__link wp-element-button" href="' . esc_url( home_url( '/feed/' ) ) . '">' . esc_html__( 'RSS feed', 'reclaim-the-web' ) . '</a></div><!-- /wp:button -->',
			'<!-- wp:button {"className":"secondary"} --><div class="wp-block-button secondary"><a class="wp-block-button__link wp-element-button" href="' . esc_url( home_url( '/social/' ) ) . '">' . esc_html__( 'Social page', 'reclaim-the-web' ) . '</a></div><!-- /wp:button -->',
			'</div><!-- /wp:buttons -->',
			'</div><!-- /wp:group -->',
		)
	);

	register_block_pattern(
		'reclaim-the-web/social-paths-callout',
		array(
			'title'      => __( 'Social Paths Callout', 'reclaim-the-web' ),
			'categories' => array( 'reclaim-the-web' ),
			'content'    => $reclaim_the_web_social_paths_content,
		)
	);
}
add_action( 'init', 'reclaim_the_web_register_block_patterns' );

/**
 * Get a file-based asset version so browsers load updated theme assets.
 *
 * @param string $relative_path Asset path relative to the theme directory.
 * @return string Asset version.
 */
function reclaim_the_web_get_asset_version( $relative_path ) {
	$asset_path = get_theme_file_path( $relative_path );

	if ( file_exists( $asset_path ) ) {
		$modified_time = filemtime( $asset_path );

		if ( false !== $modified_time ) {
			return (string) $modified_time;
		}
	}

	return wp_get_theme()->get( 'Version' );
}

/**
 * Enqueue front-end assets.
 */
function reclaim_the_web_enqueue_assets() {
	wp_enqueue_style( 'dashicons' );

	wp_enqueue_style(
		'reclaim-the-web-style',
		get_theme_file_uri( 'assets/css/theme.css' ),
		array( 'dashicons' ),
		reclaim_the_web_get_asset_version( 'assets/css/theme.css' )
	);

	wp_enqueue_script(
		'reclaim-the-web-theme',
		get_theme_file_uri( 'assets/js/theme.js' ),
		array(),
		reclaim_the_web_get_asset_version( 'assets/js/theme.js' ),
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'reclaim_the_web_enqueue_assets' );

/**
 * Append links for posts split with the Page Break block or <!--nextpage-->.
 *
 * Block templates do not call wp_link_pages() directly, but Theme Unit Test
 * paginated posts still need those internal page links on singular views.
 *
 * @param string $block_content Rendered Post Content block markup.
 * @return string
 */
function reclaim_the_web_render_post_content_pagination( $block_content ) {
	if ( ! is_singular() ) {
		return $block_content;
	}

	global $multipage, $numpages;

	if ( ! $multipage || 2 > (int) $numpages ) {
		return $block_content;
	}

	$pagination = wp_link_pages(
		array(
			'before'      => '<nav class="entry-pagination" aria-label="' . esc_attr__( 'Post pages', 'reclaim-the-web' ) . '"><span class="entry-pagination__label">' . esc_html__( 'Pages:', 'reclaim-the-web' ) . '</span>',
			'after'       => '</nav>',
			'link_before' => '<span class="post-page-numbers__inner">',
			'link_after'  => '</span>',
			'echo'        => 0,
		)
	);

	return $block_content . $pagination;
}
add_filter( 'render_block_core/post-content', 'reclaim_the_web_render_post_content_pagination' );

/**
 * Apply the saved color mode before CSS paints.
 */
function reclaim_the_web_print_theme_bootstrap() {
	?>
	<script>
		(() => {
			try {
				const theme = localStorage.getItem( 'reclaim-the-web-theme' );
				if ( 'dark' === theme || 'light' === theme ) {
					document.documentElement.dataset.theme = theme;
				}
			} catch ( error ) {}
		})();
	</script>
	<?php
}
add_action( 'wp_head', 'reclaim_the_web_print_theme_bootstrap', 0 );
