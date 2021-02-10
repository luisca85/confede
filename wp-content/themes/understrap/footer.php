<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer>

	<div class="footer" id="wrapper-footer">

		<div class="<?php echo esc_attr( $container ); ?>">

			  <div class="row">
			  		<div class="col-md-12">
			  			<p>COMRA es miembro de:</p>
			  		</div>
				    <div class="col-sm-4">
				      <?php if ( !function_exists('dynamic_sidebar') ||
						 !dynamic_sidebar('footermiembros') ) : ?>
						<?php endif; ?>
				    </div>
			  </div>

			   <div class="row">
				   	<div class="col-md-12">
				  		<p>Filiales:</p>
				  	</div>
					<div class="col-sm">
				      <?php if ( !function_exists('dynamic_sidebar') ||
						 !dynamic_sidebar('footerfiliales') ) : ?>
						<?php endif; ?>
					</div>
			  	</div>

			  	<div class="row footer_2">

				    <div class="col-sm">
				      <?php if ( !function_exists('dynamic_sidebar') ||
						 !dynamic_sidebar('footerleft') ) : ?>
						<?php endif; ?>
				    </div>

				    <div class="col-sm  ">
				     <?php if ( !function_exists('dynamic_sidebar') ||
						 !dynamic_sidebar('footermiddle') ) : ?>
						<?php endif; ?>
				    </div>

				    <div class="col-sm ">
				      <?php if ( !function_exists('dynamic_sidebar') ||
						 !dynamic_sidebar('footerright') ) : ?>
						<?php endif; ?>
				    </div>

			  	</div>

		</div><!-- container end -->
	</div><!-- wrapper end -->

</footer>

</div><!-- #page we need this extra closing tag here -->



<?php wp_footer(); ?>

</body>


</html>

