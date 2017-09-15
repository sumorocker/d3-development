<?php
/**
 * @package understrap
 */
?>
<div class="blog-section">

<div class="row justify-content-center community-blog">
	<?php 
	function excludeCat($query) {
		if ( $query->is_front_page() && is_home()) {
		$query->set('cat', '-1,-9,-3,-28,-27,-24,-19,-22,-21,-17,-23,-30,-20,-18,-5');
		}
		return $query;
		}
		add_filter('pre_get_posts', 'excludeCat');

	$query = new WP_Query( array( 'category_name' => 'community', 'posts_per_page' => '4' ) );

	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
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
</div>
</div>