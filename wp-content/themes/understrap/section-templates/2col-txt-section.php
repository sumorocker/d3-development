<?php
/**
 * @package understrap
 */
?>

<img src="<?php the_field('bg_img') ?>" alt="" style="position:absolute; z-index:-1;right:-10px; transform:translateY(-28%);" class="two-col-txt-section-bg">
<div class="two-col-txt-section scrollme animateme"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="100">
	<div class="row two-col-txts">
		
		<img src="<?php the_field('grid_1') ?>" alt="" style="height:250px; z-index:-100;right: 48%;position:absolute;">
		<div class="two-col-txt-left col-lg-4 offset-lg-2" style="display: <?php the_field('txt-left') ?>">
			<h1><?php the_field('left_title'); ?></h1>
		</div>

		<div class="two-col-txt-right col-lg-3 offset-lg-1">
			<h3><?php the_field('right_txt'); ?></h3>
			<a href="<?php the_field('button_link'); ?>"><button class="<?php the_field('button_color'); ?>" style="display: <?php the_field('button_display');?>;"><?php the_field('button_txt'); ?></button></a>
		</div>
	</div>
</div>