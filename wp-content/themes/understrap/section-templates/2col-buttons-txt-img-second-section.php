<?php
/**
 * @package understrap
 */
?>
<div class="two-col-navigation two-col-margin" style="background-image:url('<?php the_field('nav_image') ?>')">
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
		<div class="col-sm-12 scrollme animateme"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="400" style="text-align: center;"><h1><?php the_sub_field('nav_header'); ?></h1></div>
		<?php if(have_rows('navigation_col_two')) : while(have_rows('navigation_col_two')) : the_row(); ?>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-12">
				<div class="navigation-item" style="background-image:url('<?php the_sub_field('img'); ?>')">
					<h2><?php the_sub_field('h1'); ?></h2>
					<p><?php the_sub_field('p'); ?></p>
				<button class="<?php the_field('button_color'); ?>" style="display: <?php the_field('button_display');?>;"><a href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a></button>
				</div>
			</div>
		<?php endwhile; endif; ?>
	</div>
</div>