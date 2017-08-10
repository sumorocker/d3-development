<?php
/**
 * @package understrap
 */
?>

<div class="portfolio">
	
	<img class="scrollme animateme three-img"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="200"
		src="<?php the_field('background_img'); ?>" alt="">
	<div class="row">
		<div class="offset-lg-1 col-lg-6 three-col-title">
			<h1><?php the_field('startup_header'); ?></h1>
			<p><?php the_field('startup_text'); ?></p>
		</div>
	</div>
  <div class='row justify-content-center'>
  <?php if(have_rows('startup_profiles')) : while(have_rows('startup_profiles')) : the_row(); ?>
    <div class="startup-section col-lg-3">
		<div class="startup-logo" style="background-image:url('<?php the_sub_field('startup_logo')?>');">
		</div>
		<h3><?php the_sub_field('startup_name'); ?></h3>
		<p><?php the_sub_field('startup_txt'); ?></p>
		<button class="btn_orange"><?php the_sub_field('startup_button_txt'); ?></button>
	</div>
	<?php endwhile; endif; ?>
	
	</div>
	

  <div class="row">
		<div class="offset-lg-1 col-lg-6 three-col-title">
			<h1><?php the_field('alumni_header'); ?></h1>
			<p><?php the_field('startup_text'); ?></p>
		</div>
	</div>
  <div class='row justify-content-center'>
  <?php if(have_rows('startup_profiles')) : while(have_rows('alumni_profiles')) : the_row(); ?>
    <div class="startup-section col-lg-3">
		<div class="startup-logo" style="background-image:url('<?php the_sub_field('alumni_logo')?>');">
		</div>
		<h3><?php the_sub_field('alumni_name'); ?></h3>
		<p><?php the_sub_field('alumni_txt'); ?></p>
		<button class="btn_orange"><?php the_sub_field('alumni_button_txt'); ?></button>
	</div>
	<?php endwhile; endif; ?>
	
	</div>
	
  </div>
    </div>
</div>


