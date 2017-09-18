<?php
/**
 * Template Name: Career Blog Page
 *
 * Template for displaying a blank page.
 *
 * @package understrap
 */
  get_header();
?>


<?php
  get_template_part('section-templates/header-section');
?>

<?php if(is_page('startup-careers')){ ?>
<h1 class='events-section-headers'><?php the_field('header_1'); ?></h1>
<p class="event-section-content"><?php the_field('content_1'); ?></p>
<div class="jobs-section row justify-content-center">
	<div class="col-sm-12" style="text-align:center;padding-top:5%;padding-bottom:5%;">
  		<h2>Jobs from our Startups</h2>
	</div>


<?php
$query = new WP_Query( array( 'category_name' => 'startup-careers', 'posts_per_page' => '3', ) );

if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
?>
  <?php get_template_part( 'global-templates/hero', 'none'); ?>
              <?php

              /*
               * Include the Post-Format-specific template for the content.
               * If you want to override this in a child theme, then include a file
               * called content-___.php (where ___ is the Post Format name) and that will be used instead.
               */
              get_template_part( 'loop-templates/content', get_post_format() );
              ?>
 
<?php 
    endwhile;
else :
    echo 'No posts';
endif;

?>

</div>

<?php }else{ ?>
	<h1 class='events-section-headers'><?php the_field('header_1'); ?></h1>
	<p class="event-section-content"><?php the_field('content_1'); ?></p>
	<div class="jobs-section row justify-content-center">

<?php
$query = new WP_Query( array( 'category_name' => 'd3-careers', 'posts_per_page' => '3' ) );

if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
?>
  <?php get_template_part( 'global-templates/hero', 'none'); ?>
              <?php

              /*
               * Include the Post-Format-specific template for the content.
               * If you want to override this in a child theme, then include a file
               * called content-___.php (where ___ is the Post Format name) and that will be used instead.
               */
              get_template_part( 'loop-templates/content', get_post_format() );
              ?>
 
<?php 
    endwhile;
else :
    echo 'No posts';
endif;

?>

</div>
	<div class="row justify-content-center" style="text-align:center;padding-top:5%;padding-bottom:5%;">
  		<h2 class="col-sm-8">Need to add section Don’t see any opportunities?<br>Get involved with our startups or join a project </h2>
		<div class="col-sm-12">
  			<a href="http://dev.d3center.ca/careers/"><button class="btn_orange">See More</button></a>
  		</div>
	</div>
<?php } ?>

<?php
  get_footer();
?>