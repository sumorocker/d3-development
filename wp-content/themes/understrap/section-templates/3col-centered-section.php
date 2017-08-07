<?php
/**
 * @package understrap
 */
?>

<div class="three-col">
  <div class='row justify-content-center 2'>
  <?php if(have_rows('img-h2-p')) : while(have_rows('img-h2-p')) : the_row(); ?>
    <div class="text-centered col-lg-3">
		<div class="three-col-img" style="background-image:url('<?php the_sub_field('img')?>');">
		<div class="inner-triangle"></div>
		</div>
		<h2><?php the_sub_field('h2'); ?></h2>
		<p><?php the_sub_field('p'); ?></p>
	</div>
	<?php endwhile; endif; ?>
	</div>
	
  </div>
</div>
