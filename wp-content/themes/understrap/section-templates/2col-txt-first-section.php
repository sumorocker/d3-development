<?php
/**
 * @package understrap
 */
?>

<div class="two-col-txt-first-section" style="background-image: url('<?php the_field('bg_img_1') ?>');">
	<div class="row two-col-txts">
		
		
		<div class="two-col-txt-left col-lg-3 offset-lg-3" style="display: <?php the_field('txt-left_1') ?>">
			<h1><?php the_field('left_title_1'); ?></h1>
		</div>
		<div class="two-col-txt-right col-lg-3 offset-lg-1">
			<h3><?php the_field('right_txt_1'); ?></h3>

			<button style="display: <?php the_field('button_display');?>;"><?php the_field('button_txt_1'); ?></button>
		</div>
	</div>
</div>