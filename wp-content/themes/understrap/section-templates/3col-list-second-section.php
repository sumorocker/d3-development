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
	<div class="row">
		<img src="<?php the_field('grid_2'); ?>" alt="" style="position:absolute;right:20%;height:250px;">
		<div class="col-lg-4 offset-lg-2 image-section">
			<h2><?php the_field('list_header'); ?></h2>
			<p><?php the_field('list_subheader'); ?></p>
			<div class="image-left" style="background-image:url('<?php the_field('image_left_1') ?>'); height:250px;"> 
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