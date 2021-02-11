<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */



// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="post-box ">
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		
<!-- 		<div class="image-post">
						<?php
			// Must be inside a loop.
			 
			if ( has_post_thumbnail() ) {
			    the_post_thumbnail();
			}
			else {
			    echo '';
			}
			?>
		</div> -->


		<div class="entry-content content-post desktop-regular">
			<header class="entry-header">
				<?php the_title( '<h1 class="desktop-subtitle">', '</h1>' ); ?>

				<div class="entry-meta">

					<?php understrap_posted_on(); ?>

				</div><!-- .entry-meta -->
				<br>
			</header><!-- .entry-header -->

				<div class="entry-content">

					<?php the_content(); ?>

					<?php
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
							'after'  => '</div>',
						)
					);
					?>

				</div><!-- .entry-content -->

			<?php understrap_entry_footer(); ?>


		</div><!-- .entry-content -->

	</article><!-- #post-## -->
</div>
