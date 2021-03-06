<?php
/**
 * @package understrap
 */
?>
<img class="portfolio_bg_image" alt="">
<div class="portfolio greygrid-1" style="background-image:url('<?php the_field('portfolio_bg_image'); ?>')">
	<div class="row">
		<div class="offset-lg-1 col-lg-6 three-col-title">
			<h1 style="text-decoration-color:<?php the_field('background_color') ?>"><?php the_field('startup_header'); ?></h1>
			<p><?php the_field('startup_text'); ?></p>
		</div>
	</div>
  <div class='row justify-content-center'>
  <?php if(have_rows('startup_profiles')) : while(have_rows('startup_profiles')) : the_row(); ?>
  	<?php if(is_page('about-us')){ ?>
    	<div class="startup-section prizes-section orangegrid col-lg-3">
    			<div style="min-height:40vh;background-size:cover;height: 100%;background-position: center;background-image:url('<?php the_sub_field('startup_logo')?>');"></div>
				<h2><?php the_sub_field('startup_name'); ?></h2>
		</div>
	<?php }else{ ?>
		<div class="startup-section col-lg-3">
			<div class="startup-logo" style="background-image:url('<?php the_sub_field('startup_logo')?>');"></div>
				<h3><?php the_sub_field('startup_name'); ?></h3>
				<p><?php the_sub_field('startup_txt'); ?></p>
			<a href="<?php the_sub_field('startup_button_link'); ?>" target="blank"><button class="btn_orange" style="display:<?php the_field('header_button_display_1'); ?>"><?php the_sub_field('startup_button_txt'); ?></button></a>
		</div>
	<?php }; ?>
	<?php endwhile; endif; ?>
	
	</div>
	<div style="display:<?php the_field('second_section_display'); ?>">
		  <div class="row animateme three-img"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="200">
				<div class="offset-lg-1 col-lg-6 three-col-title">
					<h1 style="text-decoration-color:<?php the_field('background_color') ?>"><?php the_field('alumni_header');?></h1>
					<p><?php the_field('alumni_text'); ?></p>
				</div>
			</div>
		  <div class='row justify-content-center'>
		  <?php if(have_rows('startup_profiles')) : while(have_rows('alumni_profiles')) : the_row(); ?>
		    <div class="startup-section col-lg-3">
				<div class="startup-logo" style="background-image:url('<?php the_sub_field('alumni_logo')?>');">
				</div>
				<h3><?php the_sub_field('alumni_name'); ?></h3>
				<p><?php the_sub_field('alumni_txt'); ?></p>
				<a href="<?php the_sub_field('alumni_button_link'); ?>" target="blank"><button class="btn_orange"><?php the_sub_field('alumni_button_txt'); ?></button></a>
			</div>
			<?php endwhile; endif; ?>
			
			</div>
		</div>
  </div>
    </div>
</div>


