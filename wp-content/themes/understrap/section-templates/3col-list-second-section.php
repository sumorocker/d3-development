<?php
/**
 * @package understrap
 */
?>
<div class="three-col-list-second-section scrollme animateme"
        data-when="enter"
        data-from="1"
        data-to="0"
		data-translatey="200">
		<div class="bg-shape" style="position:absolute; height:100%;width:100%"><img src="<?php the_field('bg_shape'); ?>"/></div>
		<!-- <div class="bg-shape"><img src="<?php the_field('bg_shape'); ?>"/></div> -->

	<div class="row">
	<div class="lines"></div>
		<div class="scrollme animateme greygrid-1 grid-4"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="400" alt="" style=""></div>
		<div class="col-lg-4 offset-lg-2 image-section">
			<h1 style="text-decoration:underline;text-decoration-color:<?php the_field('background_color'); ?>"><?php the_field('list_header'); ?></h1>
			<p><?php the_field('list_subheader'); ?></p>
			<?php if( get_field('image_left_1') ): ?>
				<div class="image-left" style="background-image:url('<?php the_field('image_left_1') ?>');"></div>
			<?php endif; ?>
			<div class="<?php the_field('outline_color'); ?>">
			</div>
		</div>
		<div class="col-lg-3 offset-lg-1 col-list-section">
			<ul>
				<?php if(have_rows('list_item_1')) : while(have_rows('list_item_1')) : the_row(); ?>
					<li>
						<h2><?php the_sub_field('list_item_header'); ?></h2>
						<p><?php the_sub_field('list_item_content'); ?></p>
					</li>
				<?php endwhile; endif; ?>
			</ul>
		</div>
	</div>
</div>