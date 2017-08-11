<?php
/**
 * @package understrap
 */
?>

<div class="partners-container">
<div class="offset-lg-1 col-lg-6 partners-header"><h1><?php the_field('partners_header')?></h1></div>
<div class="row justify-content-center">
<?php if(have_rows('partners')) : while(have_rows('partners')) : the_row(); ?>
	<div class="col-sm-2 partners" style="background-image:url('<?php the_sub_field('partner_logo')?>');">
	</div>
<?php endwhile; endif; ?>	
</div>
</div>