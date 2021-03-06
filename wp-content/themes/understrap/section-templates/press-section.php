<?php
/**
 * @package understrap
 */
?>

<div class="blog-footer-section greygrid-1">
<div class="row justify-content-center blog-footer-posts">
	<div class="col-sm-12" style="text-align: center;padding-top:5vh; padding-bottom:5vh;"><h1 style="text-decoration:underline;text-decoration-color:<?php the_field('background_color'); ?>"><?php the_field('press_header'); ?></h1></div>
	<?php if(have_rows('press_article')) : while(have_rows('press_article')) : the_row(); ?>
	<div class="blog-footer-post col-lg-2" style="background-image: url('<?php the_sub_field('press_article_img'); ?>'); ">
		<div class="blog-footer-post-content">
		<h3><?php the_sub_field('press_article_title'); ?></h3>
		<a href="<?php the_sub_field('press_article_link'); ?>"><button class="white-btn">Read More</button></a>
		</div>
	</div>
	<?php endwhile; endif; ?>
	
	
</div>
</div>