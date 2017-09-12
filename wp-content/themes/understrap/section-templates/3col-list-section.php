<?php
/**
 * @package understrap
 */
?>
<div class='three_col_bg_image greygrid-1' alt=""></div>
<div class="three-col-list-section scrollme animateme"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="200">
	<div class="row">
	<div class="lines"></div>
		<h3 class="col-three-header col-lg-5 offset-lg-2">
			<?php the_field('three_col_header_1'); ?>
		</h3>
		<div class="three-col-bg-image" style="background-image:url('<?php the_field('three_col_bg_image'); ?>')"></div>
		<div class="col-lg-4 offset-lg-2">
		<?php if( get_field('image_left') ): ?>
				<div class="image-left-one" style="background-image:url('<?php the_field('image_left') ?>');"></div>
			<?php endif; ?>
			<div class="<?php the_field('outline_color'); ?>">
			</div>
		</div>
		<div class="col-lg-3 offset-lg-1 col-list-section">
			
			<ul>
				<?php if(have_rows('list_item')) : while(have_rows('list_item')) : the_row(); ?>
					<li>
						<h2 style="text-decoration:underline;text-decoration-color: <?php the_field('background_color'); ?>"><?php the_sub_field('list_item_header'); ?></h2>
						<p><?php the_sub_field('list_item_content'); ?></p>
					</li>
				<?php endwhile; endif; ?>
			</ul>
		</div>
	</div>
</div>