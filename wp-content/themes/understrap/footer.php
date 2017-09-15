<?php
/**
 * The template for displaying the footer.
 *
 * Template Name: Footer Template
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
		<div class="row footer-color">
			<div class="col-sm-4 offset-sm-4 d3-footer-content">
				<div class="social-footer">
					<a href="https://www.facebook.com/D3Centre/" target="blank"><i class="fa fa-facebook"></i></a>
			    	<a href="https://www.instagram.com/d3centre/" target="blank"><i class="fa fa-instagram"></i></a>
			    	<a href="https://www.youtube.com/channel/UCIzJb6FX7ywkwvG5RlIVDsA/featured" target="blank"><i class="fa fa-youtube"></i></a>
			    	<a href="https://twitter.com/D3Centre" target="blank"><i class="fa fa-twitter"></i></a>
			    	<a href="https://www.linkedin.com/company/2858911/"><i class="fa fa-linkedin" target="blank"></i></a>
			    	<a href="https://medium.com/district3"><i class="fa fa-medium" target="blank"></i></a>
			    </div>
		    	<div class="d3-trademark">
					<p>District 3 Innovation Center © 2017 proudly built in Montréal, Canada</p>	
				</div>
			</div>
			<div class="col-sm-4 concordia-logo">
				<img src="http://dev.d3center.ca/wp-content/uploads/2017/08/Concordia_University_logo.svg.png" alt="">
			</div>
		</div>	
<?php wp_footer(); ?>
				<script>
					// jQuery('label').click(function() {
					//         jQuery("#corner-logo").toggleClass("white-logo black-logo");
					// });
				</script>
				<script>
				jQuery(document).ready(function(){
					jQuery(".current-filter").click(function(){
						var value = jQuery(this).attr("data-filter");
						if (value == "all")
						{
							jQuery(".type-post").show("1000");
						}
						else
						{
							jQuery(".type-post").not("."+value).hide("1000");
							jQuery(".type-post").filter("."+value).show("1000");
							jQuery(".type-post").filter(".category-alumni").show("1000");
						}
						jQuery(".current-filter-ul .current-filter").click(function(){
							jQuery(this).addClass('active').siblings().removeClass('active');
						})
					})
				})
				</script>
				<script>
				jQuery(document).ready(function(){
					jQuery(".alumni-filter").click(function(){
						var value = jQuery(this).attr("data-filter");
						if (value == "all")
						{
							jQuery(".type-post").show("1000");
						}
						else
						{
							jQuery(".type-post").not("."+value).hide("1000");
							jQuery(".type-post").filter("."+value).show("1000");
							jQuery(".type-post").filter(".category-current").show("1000");
						}
						jQuery(".alumni-filter-ul .alumni-filter").click(function(){
							jQuery(this).addClass('active').siblings().removeClass('active');
						})
					})
				})
				</script>
				<script>
					jQuery('.btn-orange span').on('hover', function() {
						jQuery('.custom-btn' + '.btn_orange').trigger('hover');
					});
				</script>
				<script>
        jQuery("button").click(function() {
          jQuery('html,body').animate({
          scrollTop: jQuery(".second").offset().top},
          'slow');
          });
        </script>
</body>


</html>

