<?php
/**
 * The default template for displaying post content.
 *
 * @package WordPress
 * @subpackage rhd
 */
?>

	<li <?php post_class( 'news-item' ); ?>>
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>" target="_blank">
				<?php the_post_thumbnail( 'news' ); ?>
			</a>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		<?php endif; ?>
	</li>