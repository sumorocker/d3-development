<?php
/**
 * @package understrap
 */
?>
<div class="category-section" style="background-image:url('<?php the_field('categories_bg') ?>');">
	<div class="row">

	<div class="col-lg-1">
	<h1 class="title"><?php the_field('cat_title'); ?></h1>
	</div>
	<div class="offset-sm-4 col-sm-6"><h2><?php the_field('categories_sub_title'); ?></h2></div>
	<div class="col-lg-1 offset-lg-4 shape-left"></div>
		<div class="list col-lg-3">
		<?php if(have_rows('categories_list')) : while(have_rows('categories_list')) : the_row(); ?>
				<div class="img-w-category-left">
					<ul>
						<li class="category-item"><h1><?php the_sub_field('list_left_item'); ?></h1></li>
					</ul>
				</div>
			<?php endwhile; endif; ?>
		</div>
		<div class="list col-lg-3">
			<?php if(have_rows('categories_list')) : while(have_rows('categories_list')) : the_row(); ?>
			<div class="img-w-category-right">
				<ul>
					<li class="category-item"><h1><?php the_sub_field('list_right_item'); ?></h1></li>
				</ul>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
	<div class="row">
			<div class="col-lg-6 offset-lg-6 shape-bottom"></div>
	</div>
</div>
