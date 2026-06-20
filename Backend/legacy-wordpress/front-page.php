<?php
/**
 * Home page template.
 *
 * Keeps the original Inventor Heads content sources while using a cleaner,
 * responsive layout for the first screen and home sections.
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 */

get_header();

echo do_shortcode( '[show_theme_switch_link]' );

$template_url = get_template_directory_uri();
$slides       = array(
	array(
		'image'       => 'slide1.jpg',
		'title'       => 'Mr.Buddy',
		'description' => "It's IP Project , Air in 2018 For Pogo Network",
	),
	array(
		'image'       => 'slide2.jpg',
		'title'       => 'Mr.Buddy',
		'description' => "It's IP Project , Air in 2018 For Pogo Network",
	),
	array(
		'image'       => 'banner3.jpg',
		'title'       => 'Boston Town',
		'description' => 'VfX Project',
	),
	array(
		'image'       => 'banner4.jpg',
		'title'       => 'Vinnu',
		'description' => 'Its Web Series project air in 2018 for Youtube Network.',
	),
);

$portfolio_page = get_post( 11 );
$welcome_page   = get_post( 9 );
$contact_page   = get_post( 223 );
?>

<main class="ih-home">
	<section class="ih-hero" aria-label="<?php esc_attr_e( 'Featured projects', 'twentyseventeen' ); ?>">
		<div class="tp-banner-container ih-hero-slider">
			<div class="tp-banner">
				<ul>
					<?php foreach ( $slides as $slide ) : ?>
						<li data-transition="fade" data-slotamount="5" data-masterspeed="700">
							<img
								src="<?php echo esc_url( $template_url . '/images/' . $slide['image'] ); ?>"
								alt="<?php echo esc_attr( $slide['title'] ); ?>"
								data-bgfit="cover"
								data-bgposition="center center"
								data-bgrepeat="no-repeat"
							>
							<div class="tp-caption medium_bg_asbestos lfb ih-hero-caption" data-x="right" data-hoffset="0" data-y="bottom" data-speed="800" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off">
								<div class="ih-hero-copy">
									<p class="ih-eyebrow"><?php esc_html_e( 'Inventor Heads', 'twentyseventeen' ); ?></p>
									<h1><?php echo esc_html( $slide['title'] ); ?></h1>
									<p><?php echo esc_html( $slide['description'] ); ?></p>
									<a class="detail_page ih-button" href="<?php echo esc_url( get_permalink( 11 ) ); ?>"><?php esc_html_e( 'Read More', 'twentyseventeen' ); ?></a>
								</div>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
				<div class="tp-bannertimer"></div>
			</div>
		</div>
	</section>

	<section id="trailer" class="ih-section ih-featured-video">
		<div class="container">
			<div class="ih-section-heading">
				<p class="ih-eyebrow"><?php esc_html_e( 'Showreel', 'twentyseventeen' ); ?></p>
				<h2><?php esc_html_e( 'Our Portfolio', 'twentyseventeen' ); ?></h2>
			</div>

			<?php if ( $portfolio_page ) : ?>
				<?php
				$old_post = $post;
				$post     = $portfolio_page; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
				setup_postdata( $post );
				?>
				<div class="ih-video-frame wow bounceInDown" data-wow-duration="2s">
					<?php
					if ( function_exists( 'the_field' ) ) {
						the_field( 'video' );
					}
					?>
				</div>
				<?php
				wp_reset_postdata();
				$post = $old_post; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
				?>
			<?php endif; ?>
		</div>
	</section>

	<section class="ih-section ih-more">
		<div class="container">
			<div class="ih-split">
				<div class="ih-panel ih-panel-dark">
					<p class="ih-eyebrow"><?php esc_html_e( 'Latest Videos', 'twentyseventeen' ); ?></p>
					<h2><?php esc_html_e( 'More From Us', 'twentyseventeen' ); ?></h2>

					<?php
					$video_query = new WP_Query(
						array(
							'posts_per_page' => 2,
							'orderby'        => 'post_date',
							'order'          => 'DESC',
							'post_type'      => 'video_type',
							'post_status'    => 'publish',
						)
					);
					?>

					<?php if ( $video_query->have_posts() ) : ?>
						<div class="ih-video-list">
							<?php while ( $video_query->have_posts() ) : ?>
								<?php $video_query->the_post(); ?>
								<article class="ih-video-card wow fadeInDown">
									<div class="ih-video-thumb">
										<?php
										if ( function_exists( 'the_field' ) ) {
											the_field( 'videos' );
										}
										?>
									</div>
									<div class="ih-video-meta">
										<h3><?php the_title(); ?></h3>
										<p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo esc_html( get_the_date( 'M d,Y' ) ); ?></p>
										<p><i class="fa fa-user" aria-hidden="true"></i> <?php the_author(); ?></p>
									</div>
								</article>
							<?php endwhile; ?>
						</div>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>

				<div class="ih-panel ih-panel-light wow fadeInRight" data-wow-duration="2s">
					<p class="ih-eyebrow"><?php esc_html_e( 'Studio Work', 'twentyseventeen' ); ?></p>
					<h2><?php esc_html_e( 'All the Works shown in video Its created at InventorHeads', 'twentyseventeen' ); ?></h2>
					<p><?php esc_html_e( 'Vivamus accumsan euismod enim luctus lacinia. Aliquam malesuada erat a neque commodo facilisis. Maecenas varius, enim et facilisis venenatis, ex tellus venenatis elit, vitae congue ligula mi pretium turpis. Nam blandit arcu in dignissim consequat. Duis maximus ut elit vel bibendum.', 'twentyseventeen' ); ?></p>
					<h3><?php esc_html_e( 'Please download Inventor Heads Demoreel Breakdown', 'twentyseventeen' ); ?></h3>
					<a href="#" class="btn btn_dark ih-button" download><?php esc_html_e( 'Download', 'twentyseventeen' ); ?></a>
				</div>
			</div>
		</div>
	</section>

	<?php if ( $welcome_page ) : ?>
		<?php
		$old_post = $post;
		$post     = $welcome_page; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
		setup_postdata( $post );
		?>
		<section class="ih-section ih-welcome">
			<div class="container">
				<div class="ih-welcome-grid">
					<div class="ih-welcome-copy wow fadeInLeft" data-wow-duration="2s">
						<?php
						if ( function_exists( 'the_field' ) ) {
							the_field( 'heading' );
							the_field( 'content' );
						}
						?>
					</div>
					<div class="ih-welcome-media wow rollIn" data-wow-duration="2s">
						<?php the_post_thumbnail(); ?>
					</div>
				</div>
			</div>
		</section>
		<?php
		wp_reset_postdata();
		$post = $old_post; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
		?>
	<?php endif; ?>

	<section class="ih-section ih-contact">
		<div class="container">
			<div class="ih-contact-grid">
				<?php if ( $contact_page ) : ?>
					<?php
					$old_post = $post;
					$post     = $contact_page; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
					setup_postdata( $post );
					?>
					<div class="ih-contact-info wow slideInLeft" data-wow-duration="2s">
						<?php
						if ( function_exists( 'the_field' ) ) {
							the_field( 'heading' );
							the_field( 'content' );
						}
						?>
						<ul class="social-links ih-social-links">
							<li><a href="#" class="facebook" title="Facebook" target="_blank" rel="noopener"><?php function_exists( 'the_field' ) && the_field( 'facebook' ); ?></a></li>
							<li><a href="#" class="twitter" title="Twitter" target="_blank" rel="noopener"><?php function_exists( 'the_field' ) && the_field( 'twitter' ); ?></a></li>
							<li><a href="#" class="googleplus" title="Google+" target="_blank" rel="noopener"><?php function_exists( 'the_field' ) && the_field( 'google_plus' ); ?></a></li>
							<li><a href="#" class="instagram" title="Instagram" target="_blank" rel="noopener"><?php function_exists( 'the_field' ) && the_field( 'instagram' ); ?></a></li>
							<li><a href="#" class="youtube" title="YouTube" target="_blank" rel="noopener"><?php function_exists( 'the_field' ) && the_field( 'youtube' ); ?></a></li>
						</ul>
					</div>
					<?php
					wp_reset_postdata();
					$post = $old_post; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
					?>
				<?php endif; ?>

				<div class="ih-contact-form wow slideInRight" data-wow-duration="2s">
					<p class="ih-eyebrow"><?php esc_html_e( 'Contact', 'twentyseventeen' ); ?></p>
					<h2><?php esc_html_e( 'Get In Touch', 'twentyseventeen' ); ?></h2>
					<?php echo do_shortcode( '[contact-form-7 id="197" title="Home Contact Form"]' ); ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
