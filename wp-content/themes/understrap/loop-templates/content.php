<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="post-box ">
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

		<div class="image-post">
			<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
		</div>

		<div class="entry-content content-post desktop-regular">

			<header class="entry-header">

				<?php if ( 'post' == get_post_type() ) : ?>

					<div class="entry-meta desktop-small">
						<?php understrap_posted_on(); ?>
					</div><!-- .entry-meta -->

				<?php endif; ?>
				<br>

			</header><!-- .entry-header -->

					<?php
			the_title(
				sprintf( '<h2 class="desktop-subtitle"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h2>'
			);
			?>

			<br>

			<?php the_excerpt(); ?>

			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				)
			);
			?>

			<br>

			<?php understrap_entry_footer(); ?>


		</div><!-- .entry-content -->

	</article><!-- #post-## -->
</div>

