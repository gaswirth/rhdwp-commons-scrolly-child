<?php
/**
 * The Front Page template file.
 *
 * @package WordPress
 * @subpackage rhd
 */

get_header();

// General get_posts() arguments
$section_args = array(
  'post_type'   => 'page',
  'post_status' => 'publish',
  'numberposts' => 1
);
?>

	<section id="primary" class="site-content">
		<div id="content" role="main">

			<section id="top" class="bg-red">
				<header id="masthead" class="full-bg">
					<div class="header-content">
						<h1 id="front-page-title" class="invisible"><?php bloginfo( 'name' ); ?></h1>
						<img id="site-title" src="<?php echo RHD_CHILD_DIR; ?>/img/masthead.png" alt="Nicole Dalto: Funny. Classy. Smart.">

						<ul id="rhd-social">
							<li>
								<a href="mailto:nicoledalto@gmail.com"><img src="<?php echo RHD_CHILD_DIR; ?>/img/email.png" alt="Email icon"></a>
							</li>
							<li>
								<a href="https://facebook.com/nicoledalto"><img src="<?php echo RHD_CHILD_DIR; ?>/img/facebook.png" alt="Facebook icon"></a>
							</li>
							<li>
								<a href="https://twitter.com/nicoledalto"><img src="<?php echo RHD_CHILD_DIR; ?>/img/twitter.png" alt="Twitter icon"></a>
							</li>
							<li>
								<a href="https://www.youtube.com/watch?v=lGG07j9NSUk&list=PLa7Z8HipBal6vXZl8G_uMuFfdrUeVsKE0"><img src="<?php echo RHD_CHILD_DIR; ?>/img/youtube.png" alt="YouTube icon"></a>
							</li>
							<li>
								<a href="https://instagram.com/nmd250/"><img src="<?php echo RHD_CHILD_DIR; ?>/img/instagram.png" alt="Instagram icon"></a>
							</li>
						</ul>

						<img class="scrolldown" src="<?php echo RHD_CHILD_DIR; ?>/img/down-arrow.png" alt="scroll down">
					</div>
				</header>

				<div class="top-image">
					<img src="<?php echo RHD_CHILD_DIR; ?>/img/nicole-dalto-bg.jpg" alt="Nicole Dalto">
				</div>
			</section>

			<section id="news">
				<h2 class="section-title">Latest News</h2>
				<div class="section-content">
					<?php if ( have_posts() ) : ?>
						<ul class="news-list">
						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'content' ); ?>

						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>

				<?php
					the_posts_pagination( array(
						'mid_size' => 1,
						'prev_text' => '<div class="pagination-button ltri">&ltri;</div>',
						'next_text' => '<div class="pagination-button rtri">&rtri;</div>'
					) );
				?>
			</section>

			<section id="resume" class="bg-red">
				<div class="section-content">
					<?php
						$section_args['name'] = 'resume';
						$section = get_posts( $section_args );
					?>

					<h2 class="section-title"><?php echo $section[0]->post_title; ?></h2>

					<?php
						if ( $section ) {
							echo apply_filters( 'the_content', $section[0]->post_content );
						}
					?>
				</div>
			</section>

			<section id="media">
				<div class="section-content">
					<?php
						$section_args['name'] = 'media';
						$section = get_posts( $section_args );
					?>

					<h2 class="section-title"><?php echo $section[0]->post_title; ?></h2>

					<?php
						if ( $section ) {
							echo apply_filters( 'the_content', $section[0]->post_content );
						}
					?>
				</div>
			</section>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>