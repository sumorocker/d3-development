<?php
/**
 * @package understrap
 */
?>

<div class="blog-footer-section">
<div class="row justify-content-center blog-footer-posts">
	<div class="col-sm-12" style="text-align: center;padding-bottom: 5vh;"><h1><?php the_field('press_header'); ?></h1></div>
	<?php if(have_rows('press_article')) : while(have_rows('press_article')) : the_row(); ?>
	<div class="blog-footer-post col-lg-2" style="background-image: url('<?php the_sub_field('press_article_img'); ?>'); ">
		<div class="blog-footer-post-content">
		<h3><?php the_sub_field('press_article_title'); ?></h3>
		<button class="white-btn"><a href="<?php the_sub_field('press_article_link'); ?>">Read More</a></button>
		</div>
	</div>
	<?php endwhile; endif; ?>
	
	
</div>
</div>