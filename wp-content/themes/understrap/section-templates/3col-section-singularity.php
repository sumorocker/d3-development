<?php
/**
 * @package understrap
 */
?>

<div class="singularity-presenter-section">
  <div class='row justify-content-center'>
  <?php while(have_rows('singularity-section')) : the_row(); ?>
  	<div class='singularity-section-color' style="background-color:<?php the_field('category_color'); ?>">
	  	<div class="row">
			<div class="col-lg-12 singularity-category-title">
				<h1><?php the_sub_field('singularity_col_header'); ?></h1>
			</div>
		</div>
		<?php if(have_rows('singularity_speaker')) : the_rows(); ?>
	    <div class="col-lg-3">
			<div class="singularity-col-img" style="background-image:url('<?php the_sub_field('img')?>');">
			</div>
			<h2><?php the_sub_field('h2'); ?></h2>
			<p><?php the_sub_field('p'); ?></p>
		</div>
		<?php endif; ?>
	</div>
	<?php endwhile;?>
	</div>
  </div>