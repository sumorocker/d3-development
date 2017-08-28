<?php
/**
 * @package understrap
 */
?>
<div class="two-col-navigation2 two-col-margin" style="background-image:url('<?php the_field('nav_image') ?>')">
	<div class="row justify-content-center">
	<h1 class="two-col-navigation-header scrollme animateme"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="200">
        <?php the_field('nav_header'); ?>
    </h1>
	<h3 class="two-col-navigation-subheader scrollme animateme"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="200">
        <?php the_field('nav_subheader'); ?>
    </h3>

    
	<img class="bg_image" src="<?php the_field('bg_image') ?>" alt="">
		
		<?php if(have_rows('navigation_col')) : while(have_rows('navigation_col')) : the_row(); ?>
				<div class="navigation-div col-xl-6 col-lg-6 col-md-6 col-sm-12 navigation-spacing">
			
					<div class="navigation-item greygrid btn-5" style="background-image:url('<?php the_sub_field('img'); ?>')"><span>
						<h2><?php the_sub_field('h1'); ?></h2>
						<p><?php the_sub_field('p'); ?></p>
						<button  href='<?php the_sub_field('button_link'); ?>' class="btn_orange"><?php the_sub_field('button_text'); ?></button>
					</span>
					</div>
				</div>
		
		<?php endwhile; endif; ?>
	
		<div class="col-sm-12 scrollme animateme"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="400" style="text-align: center;"><h1><?php the_sub_field('nav_header'); ?></h1></div>
		<?php if(have_rows('navigation_col_two')) : while(have_rows('navigation_col_two')) : the_row(); ?>
			<div class="navigation-spacing-2 col-xl-4 col-lg-4 col-md-4 col-sm-12">
				<div class="navigation-item <?php the_sub_field('outer_outline') ?> <?php the_sub_field('grid'); ?>" style="background-image:url('<?php the_sub_field('img'); ?>')">
	                 <span>
	                	<h2><?php the_sub_field('h1'); ?></h2>
						<p><?php the_sub_field('p'); ?></p>
                		<button class="<?php the_sub_field('button_color'); ?>" style="display: <?php the_field('button_display');?>;"><a href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a></button>
                	</span>
				</div>
			</div>
		<?php endwhile; endif; ?>
	</div>
</div>