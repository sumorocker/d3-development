<?php
/**
 * @package understrap
 */
?>

<div class="two-col-txt-section" style="background-image: url('<?php the_field('bg_img') ?>');">
	<div class="row two-col-txts">
		
		<img src="<?php the_field('grid_1') ?>" alt="" style="height:250px; position:absolute;">
		<div class="two-col-txt-left col-lg-3 offset-lg-3" style="display: <?php the_field('txt-left') ?>">
			<h1><?php the_field('left_title'); ?></h1>
		</div>
		<div class="two-col-txt-right; col-lg-3 offset-lg-1">
			<h3><?php the_field('right_txt'); ?></h3>

			<button class="<?php the_field('button_color'); ?>" style="display: <?php the_field('button_display');?>;"><?php the_field('button_txt'); ?></button>
		</div>
	</div>
</div>