<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-info">
	<div class="sm-icons">
		<i class="fa-brands fa-facebook"></i>
		<i class="fa-brands fa-twitter"></i>
		<i class="fa-brands fa-youtube"></i>
		<i class="fa-brands fa-instagram"></i>
	</div>
	<p>
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wp-rig' ) ); ?>">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf( esc_html__( 'Proudly powered by %s', 'wp-rig' ), 'WordPress' );
		?>
	</a>
	<span class="sep"> | </span>
	<?php
	/* translators: Theme name. */
	printf( esc_html__( 'Theme: %s by the contributors / the Kingdom of Avacal theme based on WP Rig by Nicole Roth.', 'wp-rig' ), '<a href="' . esc_url( 'https://github.com/wprig/wprig/' ) . '">WP Rig</a>' );

	?>
	</p>
	<p class="privacy-policy">This is the recognized web site for The Kingdom of Avacal, Part of the <a href="http://www.sca.org" target="_blank">The Society for Creative Anachronism, Inc.</a>, maintained by the Webminister <a href="mailto:web@avacal.org" target="_blank">Roya</a>, and Deputy Webminister <a href="mailto:webdeputy@avacal.org" target="_blank">Segdae ua Faelain</a>. © Copyright 2016-2022 Kingdom of Avacal. The copyright of certain portions of www.avacal.org are retained by the original contributors.</p>
	<p class="privacy-policy">© Copyright 2016-2022 SCA - Avacal</p>
</div><!-- .site-info -->
