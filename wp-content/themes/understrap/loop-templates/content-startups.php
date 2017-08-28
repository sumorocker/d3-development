<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>





	<article <?php post_class("col-lg-3 col-md-4 blog-single"); ?> id="post-<?php the_ID(); ?>">
	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
	<div class="category-tag"><?php the_category( $separator, $parents, $post_id ); ?></div>
	<p><?php the_field('description'); ?></p>
	<a href="<?php the_field('link'); ?>"><button class="btn_orange"><header class="entry-header">

			<?php the_title( ); ?>
			<?php if ( 'post' == get_post_type() ) : ?>

			<?php endif; ?>

		</header></button></a><!-- .entry-header -->

		

		<div class="entry-content">


			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			) );
			?>
			

		</div><!-- .entry-content -->

	</article><!-- #post-## -->

