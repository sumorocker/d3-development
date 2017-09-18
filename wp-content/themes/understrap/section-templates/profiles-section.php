<?php
/**
 * @package understrap
 */
?>
<div class="profile-section-template" style="background-image:url('<?php the_field('background_img_1'); ?>')">
<div class="row">
	<div class="col-sm-6 profile-section-title">
		<h1 style="text-decoration-color:<?php the_field('background_color') ?>"><?php the_field('profile_section_title'); ?></h1>
	</div>
</div>
<?php if(is_page('design-lab')){ ?>
	<style>
		.profile-section .profile-txt{
				background-size: cover;	
				width: 100%;
				}
	</style>
<?php }; ?>
<?php if(have_rows('profile')) : while(have_rows('profile')) : the_row(); ?>
	<div class="row profile-section" >
	  <div class="profile-image col-md-12 col-lg-6" style="background-image:url('<?php the_sub_field('img_1')?>');">
	  </div>
		<div class="profile-txt" style="background-image:url('<?php the_sub_field('bg_shape_1')?>');background-position:left;">
		<?php 
		 if(is_page('about-us')){
		 ?>
			<div class="profile-body col-md-12 offset-lg-1 col-lg-8">
				<p><?php the_sub_field('testimonial_1'); ?></p>
			</div>
		 <?php } else { ?>
			<div class="profile-title col-md-12 col-lg-4">
				<h2><?php the_sub_field('testimonial_name_1'); ?></h2>
			</div>
			<div class="profile-body col-md-12 col-lg-6">
				<p><?php the_sub_field('testimonial_1'); ?></p>
			</div>
		<?php }; ?>
		</div>
	</div>
	<div class="row profile-section" style="display: <?php the_sub_field('testimonial_2_display'); ?>;">
	<div class="profile-txt" style="background-image:url('<?php the_sub_field('bg_shape_2')?>');background-position:right;">
		<?php 
		 if(is_page('about-us')){
		 ?>
			<div class="profile-body col-md-12 offset-lg-1 col-lg-8">
				<p><?php the_sub_field('testimonial_2'); ?></p>
			</div>
		 <?php } else { ?>
			<div class="profile-title col-md-12 col-lg-4">
	  			<h2><?php the_sub_field('testimonial_name_2'); ?></h2>
	  		</div>
	  		<div class="profile-body col-md-12 col-lg-6">
	  			<p><?php the_sub_field('testimonial_2'); ?></p>
	  		</div>
		<?php }; ?>
		</div>
	  <div class="profile-image col-md-12 col-lg-6" style="background-image:url('<?php the_sub_field('img_2')?>');">
	  </div>
	</div>
	<?php endwhile; endif; ?>
</div>