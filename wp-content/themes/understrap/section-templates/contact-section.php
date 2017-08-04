<?php
/**
 * @package understrap
 */
?>

<div class="contact-section" style="background-image: url('');">
	<div class="row justify-content-center contact">
		<div class="conctact-title col-lg-3">
			<h2>Contact Us</h2>
			<br>
			<p>info@d3center.ca</p>
			<br>
			<p>1256 Rue Guy, Suite 600</p>
			<br>
			<p>H3H 2O3</p>
			<br>
		</div>
		<form class="contact-form col-lg-6" method="post" name="email-form" action="../contactform/form-to-email.php">
		
			<input type="text" name="firstname" id="first-name-input" class="col-lg-6" placeholder="First Name">
			
			<input type="text" name="lastname" id="last-name-input" class="col-lg-6" placeholder="Last Name">
			
			<input type="text" name="email" id="email-input" class="col-lg-12" placeholder="Email Address">
			
			<input type="text" name="message" cols="10" rows="5" id="message-input" class="col-lg-12" placeholder="Message...">
			<br>
			<input type="submit" value="Submit" id="submit-input">
		</form>
	</div>
</div>