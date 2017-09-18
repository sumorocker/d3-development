<?php
/**
 * @package understrap
 */
?>

<div class="partners-container">
<?php if(is_page('design-lab')){ ?>
<div class="design-lab-partners">
	<div class="row">
			<div class="offset-sm-2 col-sm-4 partners-header">
				<h3>
					<?php the_field('partners_header')?>
				</h3>
			</div>
			<?php if(have_rows('partners')) : while(have_rows('partners')) : the_row(); ?>
				<div class="col-sm-3 partners" style="background-image:url('<?php the_sub_field('partner_logo')?>');"></div>
			<?php endwhile; endif; ?>	
	</div>
</div>
<?php }else{ ?>
<div class="offset-lg-1 col-lg-6 partners-header">
	<h1>
		<?php the_field('partners_header')?>
	</h1>
</div>
<div class="row justify-content-center">
<?php if(have_rows('partners')) : while(have_rows('partners')) : the_row(); ?>
	<div class="col-sm-2 partners" style="background-image:url('<?php the_sub_field('partner_logo')?>');">
	</div>
<?php endwhile; endif; ?>	
</div>
<?php }; ?>
</div>