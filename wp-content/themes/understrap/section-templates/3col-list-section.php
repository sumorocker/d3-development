<?php
/**
 * @package understrap
 */
?>
<img class='three_col_bg_image' src="<?php the_field('three_col_bg_image'); ?>" alt="">
<div class="three-col-list-section scrollme animateme"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="200">
	<div class="row">
		<div class="col-lg-4 offset-lg-2">
			<div class="image-left-one" style="background-image:url('<?php the_field('image_left') ?>');"> 
			</div>
			<div class="outline">
			</div>
		</div>
		<div class="col-lg-3 offset-lg-1 col-list-section">
			<ul>
				<?php if(have_rows('list_item')) : while(have_rows('list_item')) : the_row(); ?>
					<li>
						<h2><?php the_sub_field('list_item_header'); ?></h2>
						<p><?php the_sub_field('list_item_content'); ?></p>
					</li>
				<?php endwhile; endif; ?>
			</ul>
		</div>
	</div>
</div>