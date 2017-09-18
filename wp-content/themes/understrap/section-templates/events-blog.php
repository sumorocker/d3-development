

<?php
/**
 * @package understrap
 */
?>

<h1 class='events-section-headers'><?php the_field('header_1'); ?></h1>
<p class="event-section-content"><?php the_field('content_1'); ?></p>
  <div class="events-section row justify-content-center">

<?php 
$query = new WP_Query( array( 'category_name' => 'events', 'posts_per_page' => '3' ) );

if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
?>
  <?php get_template_part( 'global-templates/hero', 'none'); ?>
  <?php get_template_part( 'loop-templates/content', get_post_format() );?>
 
<?php 
    endwhile;
else :
    echo 'No posts';
endif;

?>
<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>

</div>
<h1 class='events-section-header text-underline-orange'>Events</h1>
<h2 style="padding-top:5%;padding-bottom:5%;text-align:center;">Hear from renowned guest<br>speakers eager to share their insights.</h2>
<div class="events-section row justify-content-center">
<?php 
$cat = new WP_Query( array( 'category_name' => 'community', 'posts_per_page' => '3' ) );

if ( $cat->have_posts() ) : while ( $cat->have_posts() ) : $cat->the_post(); 
?>
    <?php get_template_part( 'global-templates/hero', 'none'); ?>
    <?php get_template_part( 'loop-templates/content', get_post_format() ); ?>
 
<?php 
    endwhile;
else :
    echo 'No posts';
endif;

?>

<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>

 </div>
