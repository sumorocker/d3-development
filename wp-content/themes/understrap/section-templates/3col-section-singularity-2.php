<?php
/**
 * @package understrap
 */
?>

<div class="singularity-presenter-section">
  
  <div class='row justify-content-center'>

   <?php if(have_rows('singularity-section_2')) : while(have_rows('singularity-section_2')) : the_row(); ?>
  	
  	<div class='singularity-section-color col-lg-12 <?php the_sub_field('category_grid_2'); ?>' style="border-top: solid 3px <?php the_sub_field('category_text_color_2'); ?>">
	  	
	  	<div style="text-align:center;"  class="row justify-content-center">
				
				<h1 class="col-sm-12 category-title" style="text-decoration:underline; text-decoration-color:<?php the_sub_field('category_text_color_2'); ?>;"><?php the_sub_field('singularity_col_header_2'); ?></h1>
				<div class="row justify-content-center" style="width:80%;">
					<?php if(have_rows('singularity_speaker_2')) : while(have_rows('singularity_speaker_2')) : the_row(); ?>

						<div class="category-content_2 col-lg-4">
							
							<div class="singularity-col-img_2" style="border:solid 3px <?php the_sub_field('category_color'); ?>; background-image:url('<?php the_sub_field('img')?>');"></div>
								
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