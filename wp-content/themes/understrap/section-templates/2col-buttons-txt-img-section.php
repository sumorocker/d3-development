<?php
/**
 * @package understrap
 */
?>
<div class="row">
			<div style="padding-left: 5%;padding-bottom: 5%;" class="offset-lg-1 col-lg-6">
				<h1 class="navigation_col_header_1"><?php the_field('navigation_col_header_1'); ?></h1>
				<h2 class="navigation_col_header_1"><?php the_field('navigation_col_subheader_1'); ?></h2>
			</div>
		</div>
<div class="two-col-navigation">
	<div class="row justify-content-center">
	<img class="bg_image" src="<?php the_field('bg_image') ?>" alt="">
		<?php if(have_rows('navigation_col')) : while(have_rows('navigation_col')) : the_row(); ?>
				<?php if(is_page('district-fellowship')){ ?>
					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 navigation-spacing">
				<?php }else{ ?>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 navigation-spacing">
				<?php } ?>
					<div style="background-image:url('<?php the_sub_field('img'); ?>');background-size:cover;" 
					class="navigation-item custom-btn <?php the_sub_field('outer_outline') ?> <?php the_sub_field('grid'); ?>">
						<span>
							<h2><?php the_sub_field('h1'); ?></h2>
							<p><?php the_sub_field('p'); ?></p>
							<a href='<?php the_sub_field('button_link'); ?>'><button class="<?php the_sub_field('button_color'); ?>"><?php the_sub_field('button_text'); ?></button></a>
						</span>
					</div>
				</div>
		
		<?php endwhile; endif; ?>
	</div>
</div>