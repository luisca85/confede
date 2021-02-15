<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>


<div class="wrapper " id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}
					?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<div class="container">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<div class="box-shadow box-completa d-flex flex-column">
				<div class="desktop-subtitle mt-3 text-center">Olimpiadas medicas</div>
				<img class="img-fluid mx-auto mt-4 mb-4" src="https://www.comra.org.ar/new/wp-content/uploads/2021/02/olimpics-2.png">
				<a class="align-self-end" href="">Leer más</a>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="box-shadow box-completa d-flex flex-column">
				<div class="desktop-subtitle mt-3 text-center">Olimpiadas medicas</div>
				<img class="img-fluid mx-auto mt-4 mb-4" src="https://www.comra.org.ar/new/wp-content/uploads/2021/02/olimpics-2.png">
				<a class="align-self-end" href="">Leer más</a>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="box-shadow box-completa d-flex flex-column">
				<div class="desktop-subtitle mt-3 text-center">Olimpiadas medicas</div>
				<img class="img-fluid mx-auto mt-4 mb-4" src="https://www.comra.org.ar/new/wp-content/uploads/2021/02/olimpics-2.png">
				<a class="align-self-end" href="">Leer más</a>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
