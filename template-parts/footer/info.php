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
		<a href="https://www.facebook.com/KingdomofAvacalSCA" target="_blank" alt="Official Kingdom of Avacal Facebook"><i class="fa-brands fa-facebook"></i></a>
		<a href="https://twitter.com/kingdomofavacal" target="_blank" alt="Official Kingdom of Avacal Twitter"><i class="fa-brands fa-twitter"></i></a>
		<a href="https://www.instagram.com/kingdomofavacal/" target="_blank" alt="Official Kingdom of Avacal Instagram"><i class="fa-brands fa-instagram"></i></a>
		<a href="https://www.youtube.com/channel/UCZU7WN6qooSjet_d-6RqFpw/" target="_blank" alt="Official Kingdom of Avacal Youtube"><i class="fa-brands fa-youtube"></i></a>
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
	printf( esc_html__( 'Theme: %s by Nicole Roth.', 'wp-rig' ), '<a href="' . esc_url( 'https://github.com/wprig/wprig/' ) . '">WP Rig</a>' );

	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '<span class="sep"> | </span>' );
	}

	?>
	<p class="disclaimer">This is the recognized web site for The Kingdom of Avacal, Part of the <a href="http://www.sca.org" target="_blank">The Society for Creative Anachronism, Inc.</a>, maintained by the Webminister <a href="mailto:web@avacal.org" target="_blank">Roya</a>, and Deputy Webminister <a href="mailto:webdeputy@avacal.org" target="_blank">Segdae ua Faelain</a>. ©Copyright 2016-2022 Kingdom of Avacal. The copyright of certain portions of http://avacal.org are retained by the original contributors.</p>
	<div class="kingdom-device">
	<img src ='<?php bloginfo( 'template_directory' ); ?>/assets/images/AvacalKingdomDeviceSmall.png' alt="Fluffy" class="footer-icon" />
	</div>
	<p class="disclaimer">© Copyright 2016-2022 SCA - Avacal</p>
</div><!-- .site-info -->
