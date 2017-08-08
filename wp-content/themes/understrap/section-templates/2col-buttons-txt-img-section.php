<?php
/**
 * @package understrap
 */
?>
<div class="two-col-navigation">
	<div class="row justify-content-center">
		
		<?php if(have_rows('navigation_col')) : while(have_rows('navigation_col')) : the_row(); ?>
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-12">
				<div class="navigation-item" style="background-image:url('<?php the_sub_field('img'); ?>')">
					<h2><?php the_sub_field('h1'); ?></h2>
					<p><?php the_sub_field('p'); ?></p>
					<button  href='<?php the_sub_field('button'); ?>' class="btn basic-btn">basic</button>
				</div>
			</div>
		<?php endwhile; endif; ?>
	</div>
</div>