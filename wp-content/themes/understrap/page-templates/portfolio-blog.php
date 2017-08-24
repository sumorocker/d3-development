<?php
/**
 * Template Name: Portfolio blog Page Template
 *
 * Template for displaying a Portfolio Blog page.
 *
 * @package understrap
 */
  get_header();
?>


<div>
  <?php 
        get_template_part('section-templates/header-section');
        get_template_part('section-templates/3col-list-section');
  ?>

</div>

<h1 class='events-section-headers'>Current</h1>
<p class="event-section-content"><?php the_field('content_1'); ?></p>
  <div class="events-section row justify-content-center">

<?php 
$query = new WP_Query( array( 'category_name' => 'current', 'post_per_page' => '3', 'orderby'=> 'title', 'order' => 'ASC'  ) );

if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
?>
  <?php get_template_part( 'global-templates/hero', 'none'); ?>
              <?php

              /*
               * Include the Post-Format-specific template for the content.
               * If you want to override this in a child theme, then include a file
               * called content-___.php (where ___ is the Post Format name) and that will be used instead.
               */
              get_template_part( 'loop-templates/content-startups', get_post_format() );
              ?>
 
<?php 
    endwhile;
else :
    echo 'No posts';
endif;

?>

</div>
<h1 class='events-section-header'>Alumni</h1>
<p class='event-section-content'>Hear from renowned guest speakers eager to share their insights.</p>
<div class="events-section row justify-content-center">
<?php 
$cat = new WP_Query( array( 'category_name' => 'alumni', 'posts_per_page' => '3', 'orderby'=> 'title', 'order' => 'ASC'  ) );

if ( $cat->have_posts() ) : while ( $cat->have_posts() ) : $cat->the_post(); 
?>
  <?php get_template_part( 'global-templates/hero', 'none'); ?>
              <?php

              /*
               * Include the Post-Format-specific template for the content.
               * If you want to override this in a child theme, then include a file
               * called content-___.php (where ___ is the Post Format name) and that will be used instead.
               */
              get_template_part( 'loop-templates/content-startups', get_post_format() );
              ?>
 
<?php 
    endwhile;
else :
    echo 'No posts';
endif;

?>

 </div>


<?php
	get_footer();
?>