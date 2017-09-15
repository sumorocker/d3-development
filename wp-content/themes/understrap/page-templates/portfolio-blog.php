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
        get_template_part('section-templates/press-section');
  ?>

</div>


<div class="portfolio-blog">
<h1 class='portfolio-section-headers'>Current</h1>
<p class="portfolio-section-content"><?php the_field('content_1'); ?></p>
<div class="filter-container"> 
    <ul class="current-filter-ul">
    <li class="current-filter active" data-filter="post">All</li>
        <li class="current-filter" data-filter="tag-hardware">Hardware</li>
        <li class="current-filter" data-filter="tag-software">Software</li>
        <li class="current-filter" data-filter="tag-social-innovation">Social Innovation</li>
        <li class="current-filter" data-filter="tag-life-sciences">Life Sciences</li>
        <li class="current-filter" data-filter="tag-ai">AI</li>
        <li class="current-filter" data-filter="tag-e-commerce">E-Commerce</li>
        <li class="current-filter" data-filter="tag-education">Education</li>
</ul>
</div>


  <div class="portfolio-section row justify-content-center">


<?php 
$query = new WP_Query( array( 'category_name' => 'current', 'post_per_page' => '100', 'orderby'=> 'title', 'order' => 'ASC'  ) );

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
    <ul class="alumni-filter-ul">
    <li class="alumni-filter active" data-filter="post">All</li>
        <li class="alumni-filter" data-filter="tag-hardware">Hardware</li>
        <li class="alumni-filter" data-filter="tag-software">Software</li>
        <li class="alumni-filter" data-filter="tag-social-innovation">Social Innovation</li>
        <li class="alumni-filter" data-filter="tag-life-sciences">Life Sciences</li>
        <li class="alumni-filter" data-filter="tag-ai">AI</li>
        <li class="alumni-filter" data-filter="tag-e-commerce">E-Commerce</li>
        <li class="alumni-filter" data-filter="tag-education">Education</li>
</ul>
</div>
<div class="portfolio-section row justify-content-center">
<?php 
$query = new WP_Query( array( 'category_name' => 'alumni', 'posts_per_page' => '100', 'orderby'=> 'title', 'order' => 'ASC'  ) );

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

</div>
</div>

<?php
	get_footer();
?>