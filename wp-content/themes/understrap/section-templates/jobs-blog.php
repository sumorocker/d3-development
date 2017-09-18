<?php
/*
 * @package understrap
 */
?>

<div class="innovation-jobs-section row justify-content-center">

<?php 
$cat = new WP_Query( array( 'category_name' => 'Innovation Projects Jobs', 'posts_per_page' => '4' ) );

if ( $cat->have_posts() ) : while ( $cat->have_posts() ) : $cat->the_post(); 
?>
  <?php get_template_part( 'global-templates/hero', 'none'); ?>
              <?php

              /*
               * Include the Post-Format-specific template for the content.
               * If you want to override this in a child theme, then include a file
               * called content-___.php (where ___ is the Post Format name) and that will be used instead.
               */
              get_template_part( 'loop-templates/content-1', get_post_format() );
              ?>
 
<?php 
    endwhile;
else :
    echo 'No posts';
endif;

?>

<?php wp_reset_query(); ?>

 </div>