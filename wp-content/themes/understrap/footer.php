<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
<?php get_template_part('section-templates/newsletter-section'); ?> 
	<div class="<?php echo esc_html( $container ); ?>">
		<div class="row">

			<div class="col-md-12">
				<footer class="site-footer" id="colophon">
					<div class="site-info">
							<?php wp_nav_menu( array( 
							'theme_location' => 'secondary',
							'menu_id' => 'menu'
							) ); ?>
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->
	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

