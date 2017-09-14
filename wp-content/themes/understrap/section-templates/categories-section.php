<?php
/**
 * @package understrap
 */
?>
<div class="category-section-1">
		<h1 class="title"><?php the_field('cat_title'); ?></h1>
		<div class="row justify-content-center">
			<div class="category-section-title col-sm-6">
				<h2><?php the_field('categories_sub_title'); ?></h2>
			</div>
		</div>
		<!-- <div class="col-lg-1 offset-lg-4 shape-left"></div> -->
	<div style="background-image:url('<?php the_field('categories_bg') ?>');">
		<div class="row row_1">
			<?php if(have_rows('categories_list')) : while(have_rows('categories_list')) : the_row(); ?>
				<?php if( get_sub_field('list_left_item') ): ?>
					<div class="list col-lg-3">
						<div class="img-w-category-left <?php the_field('grid-color'); ?>" >
							<ul>
								<li class="category-section-item" style="background: <?php the_field('background_color'); ?>;background-image: url(<?php the_sub_field('background_left_img'); ?>);"><h1><?php the_sub_field('list_left_item'); ?></h1></li>
							</ul>
						</div>
					</div>
				<?php endif ?>
			<?php endwhile; endif; ?>
		</div>
		<div class="row row_2">
			<?php if(have_rows('categories_list')) : while(have_rows('categories_list')) : the_row(); ?>
				<?php if( get_sub_field('list_right_item') ): ?>
					<div class="list col-lg-3">
						<div class="img-w-category-right <?php the_field('grid-color'); ?>" >
							<ul style="margin-bottom: 0rem;">
								<li class="category-section-item" style="background: <?php the_field('background_color'); ?>;background-image: url(<?php the_sub_field('background_right_img'); ?>);"><h1><?php the_sub_field('list_right_item'); ?></h1></li>
							</ul>
						</div>
					</div>
				<?php endif ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>
