<?php
/**
 * @package understrap
 */
?>

<div class="three-col">
	
	<img class="scrollme animateme three-img"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="200"
		src="<?php the_field('background_img'); ?>" alt="">
	<div class="row">
		<div class="offset-lg-1 col-lg-6 three-col-title">
			<h1>meet our coaches</h1>
			<p>A seasoned entrepreneur you can count on to challenge you, hold you accountable, and help you avoid costly mistakes.</p>
		</div>
	</div>
  <div class='row justify-content-center'>
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
