<?php
/**
 * @package understrap
 */
?>
<div class="three-col-list-second-section">
	<div class="row">
		<div class="col-lg-4 offset-lg-2 image-section">
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