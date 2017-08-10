<?php
/**
 * @package understrap
 */
?>
<div class="category-section" style="background-image:url('http://localhost:8888/d3-dev-3/wp-content/uploads/2017/08/Group-3.svg');">
	<div class="row">

	<div class="col-lg-1">
	<h1 class="title"><?php the_field('cat_title'); ?></h1>
	</div>

	<div class="col-lg-1 offset-lg-4 shape-left"></div>



		<div class="col-lg-3">
		<?php if(have_rows('categories_list')) : while(have_rows('categories_list')) : the_row(); ?>
			<div class="img-w-category-left">
				<ul>
					<li class="category-item"><h2><?php the_sub_field('list_left_item'); ?></h2></li>
				</ul>
			</div>
			<?php endwhile; endif; ?>
		</div>
		<div class="col-lg-3">
			<?php if(have_rows('categories_list')) : while(have_rows('categories_list')) : the_row(); ?>
			<div class="img-w-category-right">
				<ul>
					<li class="category-item"><h2><?php the_sub_field('list_right_item'); ?></h2></li>
				</ul>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
	<div class="row">
			<div class="col-lg-6 offset-lg-6 shape-bottom"></div>
	</div>
</div>

<!-- style="background-image:url('http://localhost:8888/d3-dev-3/wp-content/uploads/2017/08/categories-shape.png')" -->