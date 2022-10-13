<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

// Use grid layout if blog index is displayed.

wp_rig()->print_styles( 'wp-rig-front-page' );

?>

<div class="front-page-spacer-top"></div>
<div class="front-page-spacer-bg"></div>

	<main id="primary" class="site-main">
		<div class="entry-banner">
			<div class="banner-bg">
				<img src='<?php bloginfo( 'template_directory' ); ?>/assets/images/src/FrontPageBg.png' alt="Fluffy" class="banner-bg-img" />
			</div>

			<div class="banner-welcome">
				<img src='<?php bloginfo( 'template_directory' ); ?>/assets/images/src/FrontPageWelcome.png' alt="Welcome" class="banner-welcome-img" />
			</div>

			<div class="banner-text-only">
				<img src='<?php bloginfo( 'template_directory' ); ?>/assets/images/src/FrontPageTextOnly.png' alt="Welcome" class="banner-welcome-text" />
			</div>
		</div>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
			<?php
				get_template_part( 'template-parts/content/entry_header', get_post_type() );

			if ( is_search() ) {
				get_template_part( 'template-parts/content/entry_summary', get_post_type() );
			} else {
				get_template_part( 'template-parts/content/entry_content', get_post_type() );
			}
			?>
		</article><!-- #post-<?php the_ID(); ?> -->
	</main><!-- #primary -->
<?php
get_sidebar();
get_footer();
