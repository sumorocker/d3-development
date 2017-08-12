<?php
/**
 * @package understrap
 */
?>
<div class="two-col-navigation">
	<div class="row">
		
		<?php if(have_rows('navigation_col')) : while(have_rows('navigation_col')) : the_row(); ?>
			<div class="col-xl-3 col-lg-4 offset-lg-2 col-md-4 col-sm-12">
				<div class="navigation-item" style="background-image:url('<?php the_sub_field('img'); ?>')">
					<h2><?php the_sub_field('h1'); ?></h2>
					<p><?php the_sub_field('p'); ?></p>
					<button type="button" class="<?php the_field('button_color'); ?>">
          				<h4><?php the_sub_field('button_text'); ?></h4>
        			</button>
				</div>
			</div>
		<?php endwhile; endif; ?>
	</div>
</div>