<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>


<div class="col-lg-3 col-md-4 blog-single">
<div class="startup-logo" style="background-image:url('<?php the_field('logo_img'); ?>')"></div>
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php the_category( $separator, $parents, $post_id ); ?>
	<p><?php the_field('description'); ?></p>
	<a href="<?php the_field('link'); ?>"><button class="btn_orange"><header class="entry-header">

			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>' ); ?>
			<?php if ( 'post' == get_post_type() ) : ?>

			<?php endif; ?>

		</header></button></a><!-- .entry-header -->

		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

		<div class="entry-content">


			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			) );
			?>
			

		</div><!-- .entry-content -->

	</article><!-- #post-## -->
</div>
