<?php
/**
 * @package understrap
 */
?>

<?php if(is_page('portfolio')){ ?>
<?php get_template_part('section-templates/success-stories'); ?>
<?php }else{ ?>

<div class="blog-section">

<div class="row justify-content-center community-blog">
	<?php 

	$query = new WP_Query( array( 'category_name' => 'launch', 'posts_per_page' => '4' ) );

	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
	?>
	  <?php get_template_part( 'global-templates/hero', 'none'); ?>
	              <?php
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

</div>
	<?php }; ?>