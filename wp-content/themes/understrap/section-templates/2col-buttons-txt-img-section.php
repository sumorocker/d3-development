<?php
/**
 * @package understrap
 */
?>
<div class="two-col-navigation">
	<div class="row justify-content-center">
	<img class="bg_image" src="<?php the_field('bg_image') ?>" alt="">
		
		<?php if(have_rows('navigation_col')) : while(have_rows('navigation_col')) : the_row(); ?>
				<div class="col-xl-4 col-lg-6 col-md-4 col-sm-12 navigation-spacing">
			
					<div class="navigation-item lines custom-btn btn-5" style="background-image:url('<?php the_sub_field('img'); ?>')"><span>
						<h2><?php the_sub_field('h1'); ?></h2>
						<p><?php the_sub_field('p'); ?></p>
						<button  href='<?php the_sub_field('button_link'); ?>' class="btn_orange"><?php the_sub_field('button_text'); ?></button>
					</span>
					</div>
				</div>
		
		<?php endwhile; endif; ?>
	</div>
</div>