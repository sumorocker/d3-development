<?php
/**
 * @package understrap
 */
?>

<div class="two-col-txt-first-section">
<img class="bg_img_1" src="<?php the_field('bg_img_1') ?>" alt="">
	<div class="row two-col-txts" >	
                <?php if(is_page('singularity-university')){ ?>
                <div class="two-col-txt-left col-lg-4 col-sm-12 offset-lg-2 scrollme animateme three-img"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="100" style="display: <?php the_field('txt-left_1') ?>">
                <?php }else{ ?>
                <div class="two-col-txt-left col-lg-3 col-sm-12 offset-lg-3 scrollme animateme three-img"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="100" style="display: <?php the_field('txt-left_1') ?>">
                <?php } ?>
		
        <div class="scrollme animateme three-img greygrid-1 grid-3"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="100" style="background-image:url('<?php the_field('grid_1') ?>')">
        </div>
	<h1 class="scrollme animateme three-img" 
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="100"><?php the_field('left_title_1'); ?></h1>
		</div>

		<div class="two-col-txt-right col-lg-3 offset-lg-1 scrollme animateme three-img "
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="200">
			<h3><?php the_field('right_txt_1'); ?></h3>
			<a href="<?php the_field('button_link'); ?>"><button  class="<?php the_field('button_color'); ?>" style="display: <?php the_field('button_display_1');?>;"><?php the_field('button_txt_1'); ?></button></a>
		</div>
	</div>
</div>