<?php
/**
 * @package understrap
 */
?>
<div class="profile-section-template" style="background-image:url('<?php the_field('background_img_1'); ?>')">
<?php if(have_rows('profile')) : while(have_rows('profile')) : the_row(); ?>
	<div class="row profile-section" style="background-image:url('<?php the_sub_field('bg_shape_1')?>');">
	  <div class="profile-image col-md-12 col-lg-6" style="background-image:url('<?php the_sub_field('img_1')?>');">
	  </div>


	  <div class="profile-title col-md-12 col-lg-3">
	  	<h2><?php the_sub_field('testimonial_name_1'); ?></h2>
	  </div>
	  <div class="profile-body col-md-12 col-lg-3">
	  	<p><?php the_sub_field('testimonial_1'); ?></p>
	  </div>
	

	</div>
	<div class="row profile-section" style="display: <?php the_sub_field('testimonial_2_display'); ?>;background-image:url('<?php the_sub_field('bg_shape_2')?>');">
	  <div class="profile-title col-md-12 col-lg-3">
	  	<h2><?php the_sub_field('testimonial_name_2'); ?></h2>
	  </div>
	  <div class="profile-body col-md-12 col-lg-3">
	  	<p><?php the_sub_field('testimonial_2'); ?></p>
	  </div>
	  <div class="profile-image col-md-12 col-lg-6" style="background-image:url('<?php the_sub_field('img_2')?>');">
	  </div>
	</div>
	<?php endwhile; endif; ?>
	
</div>