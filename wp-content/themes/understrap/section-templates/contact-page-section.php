<?php
/**
 * @package understrap
 */
?>

<div class="contact-section" style="background-image: url('');">
	<div class="row justify-content-center contact">
		<div class="col-sm-10 offset-sm-2 contact-header"><h1>Get In Touch</h1></div>
		<img class="contact-grid" src="<?php the_field('grid_2'); ?>"/>
		<div class="contact-title col-lg-2">
			<h3 class="text-underline-orange">Drop us a Line</h3>
			<div class="left-column">
			<p class="contact_item"><?php the_field('contact_email'); ?></p>
			<!-- <h3 class="contact_item"><?php the_field('contact_address'); ?></h3> -->
			<p class="contact_item"><?php the_field('contact_phone'); ?></p>
			</div>
			<!-- <div class="private-tour">
			<h3>Private Tour</h3>
			<p><?php the_field('private_tour_txt'); ?></p>
			<a href="<?php the_field('private_tour_btn_link'); ?>"><button class="<?php the_field('button_color'); ?>"><?php the_field('private_tour_btn'); ?>Book</button></a>
		</div> -->
		</div>
		<div class="contact-title col-lg-2">
			<h3 class="text-underline-orange">Media Inquires</h3>
			<p>For members of the press, connect with our marketing and communications manager <a href="mailto:khalil@d3center.ca?Subject=Media%20Inquires" target="_top">here.</a> </p>
		<!-- <div class="public-tour">
			<h3>Public Tour</h3>
			<p><?php the_field('public_tour_txt'); ?></p>
			<a href="<?php the_field('public_tour_btn_link'); ?>"><button class="<?php the_field('button_color'); ?>"><?php the_field('public_tour_btn'); ?>Join</button></a>
			</div> -->
			<div class="social-links">
			<div class="container text-left">
    <a href="https://www.facebook.com/District3InnovationCentre" target="blank"><i class="fa fa-facebook"></i></a>
    <a href="https://www.instagram.com/d3center/?hl=en" target="blank"><i class="fa fa-instagram"></i></a>
    <a href="https://twitter.com/D3Centre?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
    target="blank"><i class="fa fa-twitter"></i></a>
    <a href="https://www.linkedin.com/company/district-3-innovation-center"><i class="fa fa-linkedin" target="blank"></i></a>
			</div>
  </div>

		</div>
		<form class="contact-form col-lg-4" method="post" name="email-form" action="../contactform/form-to-email.php">
		
			<input type="text" name="firstname" id="first-name-input" class="col-lg-6" placeholder="First Name">
			
			<input type="text" name="lastname" id="last-name-input" class="col-lg-6" placeholder="Last Name">
			
			<input type="text" name="email" id="email-input" class="col-lg-12" placeholder="Email Address">
			
			<textarea cols="25" maxlength="1000" name="message" rows="6" placeholder="Message..." id="message-input"></textarea>
			<br>
			<input class="btn_orange" type="submit" value="Submit" id="submit-input">
		</form>
	</div>
		<?php 
			get_template_part('section-templates/2col-buttons-txt-img-section');
		 ?>
	<div class="tours-section">
		<div class="row justify-content-center contact">	
			<div class="col-lg-12">
				<iframe src="https://snazzymaps.com/embed/8701" width="100%" height="400px" style="border:none;"></iframe>
			</div>
		</div>
	</div>
</div>

<?php 
	get_template_part('section-templates/faq-section');
 ?>

