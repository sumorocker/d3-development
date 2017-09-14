<?php
/**
 * @package understrap
 */
?>

<div class="singularity-presenter-section">
  
  <div class='row justify-content-center'>

   <?php if(have_rows('singularity-section')) : while(have_rows('singularity-section')) : the_row(); ?>
  	
  	<div class='singularity-section-color col-lg-12 <?php the_sub_field('category_grid'); ?>' style="border-top: dashed 3px <?php the_sub_field('category_text_color'); ?>">
	  	
	  	<div style="text-align:center;"  class="row justify-content-center">
				
				<h1 class="col-sm-12 category-title" style="text-decoration:underline; text-decoration-color:<?php the_sub_field('category_text_color'); ?>;"><?php the_sub_field('singularity_col_header'); ?></h1>
				<div class="row justify-content-center" style="width:80%;">
					<?php if(have_rows('singularity_speaker')) : while(have_rows('singularity_speaker')) : the_row(); ?>

						<div class="category-content col-lg-4">
							
							<div class="singularity-col-img" style="border:solid 3px <?php the_sub_field('category_color'); ?>; background-image:url('<?php the_sub_field('img')?>');"></div>
								
								<h2><?php the_sub_field('h2'); ?></h2>
								
								<p><?php the_sub_field('p'); ?></p>
						
						</div>

					<?php endwhile; endif; ?>
					</div>
			</div>
	
	</div>
	<?php endwhile; endif;?>
</div>

</div>