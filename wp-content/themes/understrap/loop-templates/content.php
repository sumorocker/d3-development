<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<div class="col-lg-3 col-md-4 blog-single" style="background-image:url('<?php the_field('thumbnail_img'); ?>')">
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

		<header class="entry-header">

			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( the_field('') ) ),
			'</a></h2>' ); ?>
			<?php if ( 'post' == get_post_type() ) : ?>

			<?php endif; ?>

		</header><!-- .entry-header -->

		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
		
		<div class="entry-content">
		
			<?php if( get_field('post-link') ){ ?>
				<a class="btn btn-secondary understrap-read-more-link" href="<?php the_field('post-link'); ?>"><?php the_field('text-link') ?></a>		
			<?php }else{ ?>

			<?php
			the_excerpt();
			?>

			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			) );
			?>

			<?php }?>

		</div><!-- .entry-content -->

	</article><!-- #post-## -->
</div>