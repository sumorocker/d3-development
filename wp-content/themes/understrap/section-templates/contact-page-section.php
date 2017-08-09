<?php
/**
 * @package understrap
 */
?>

<div class="contact-section" style="background-image: url('');">
	<div class="row justify-content-center contact">
		<div class="conctact-title col-lg-3">
			<h3>Contact Us</h3>
			<p><?php the_field('contact_email'); ?></p>
			<p><?php the_field('contact_address'); ?></p>
			<p><?php the_field('contact_phone'); ?></p>

			<h3>Private Tour</h3>
			<p><?php the_field('private_tour_txt'); ?></p>
			<button class="<?php the_field('button_color'); ?>"><?php the_field('private_tour_btn'); ?></button>


			<h3>Public Tour</h3>
			<p><?php the_field('public_tour_txt'); ?></p>
			<button class="<?php the_field('button_color'); ?>"><?php the_field('public_tour_btn'); ?></button>
			<div class="container text-left">
    <a href="https://www.facebook.com/District3InnovationCentre" target="blank"><i class="fa fa-facebook"></i></a>
    <a href="https://www.instagram.com/d3center/?hl=en" target="blank"><i class="fa fa-instagram"></i></a>
    <a href="https://twitter.com/D3Centre?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
    target="blank"><i class="fa fa-twitter"></i></a>
    <a href="https://www.linkedin.com/company/district-3-innovation-center"><i class="fa fa-linkedin" target="blank"></i></a>


    
 
  </div>

		</div>
		<form class="contact-form col-lg-6" method="post" name="email-form" action="../contactform/form-to-email.php">
		
			<input type="text" name="firstname" id="first-name-input" class="col-lg-6" placeholder="First Name">
			
			<input type="text" name="lastname" id="last-name-input" class="col-lg-6" placeholder="Last Name">
			
			<input type="text" name="email" id="email-input" class="col-lg-12" placeholder="Email Address">
			
			<textarea cols="25" maxlength="1000" name="message" rows="6" placeholder="Message..." id="message-input"></textarea>
			<br>
			<input class="btn_orange" type="submit" value="Submit" id="submit-input">
		</form>
	</div>
	<div class="tours-section">
	
	<div class="row justify-content-center contact">	
		<div class="col-lg-12">
			
			<iframe src="https://snazzymaps.com/embed/8701" width="100%" height="400px" style="border:none;"></iframe>

		</div>
		
	</div>


	</div>
</div>