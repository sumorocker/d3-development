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


<div class="portfolio-blog">
<h1 class='portfolio-section-headers'>Current</h1>
<p class="portfolio-section-content"><?php the_field('content_1'); ?></p>
<div class="filter-container"> 
    <ul>
    <li class="button active" data-filter="post">All</li>
        <li class="button" data-filter="category-hardware-current">Hardware</li>
        <li class="button" data-filter="category-software-current">Software</li>
        <li class="button" data-filter="category-social-innovation-current">Social Innovation</li>
        <li class="button" data-filter="category-life-sciences-current">Life Sciences</li>
        <li class="button" data-filter="category-ai-current">AI</li>
        <li class="button" data-filter="category-e-commerce-current">E-Commerce</li>
        <li class="button" data-filter="category-education-current">Education</li>
</ul>
</div>


  <div class="portfolio-section row justify-content-center">


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

<h1 class='portfolio-section-headers'>Alumni</h1>
<p class='portfolio-section-content'>Hear from renowned guest speakers eager to share their insights.</p>
<div class="filter-container"> 
    <ul>
    <li class="button active" data-filter="post">All</li>
        <li class="button" data-filter="category-hardware-alumni">Hardware</li>
        <li class="button" data-filter="category-software-alumni">Software</li>
        <li class="button" data-filter="category-social-innovation-alumni">Social Innovation</li>
        <li class="button" data-filter="category-life-sciences-alumni">Life Sciences</li>
        <li class="button" data-filter="category-ai-alumni">AI</li>
        <li class="button" data-filter="category-e-commerce-alumni">E-Commerce</li>
        <li class="button" data-filter="category-education-alumni">Education</li>
</ul>
</div>
<div class="portfolio-section row justify-content-center">
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

</div>
</div>

<?php
	get_footer();
?>