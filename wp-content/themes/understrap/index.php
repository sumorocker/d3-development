<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

global $wp_query;
$modifications = array();
if( !empty( $_GET['catname'] ) && $_GET['thumbail'] == 'only_thumbnailed' ) {
	$modifications['meta_query'][] = array(
		'key' => '_thumbnail_id',
		'value' => '',
		'compare' => '!='
	);
}

$args = array_merge( 
	$wp_query->query_vars, 
	$modifications 
);

query_posts( $args );

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero', 'none'); ?>
	<?php get_template_part('section-templates/header-section') ?>

<?php endif; ?>
			<!-- Do the left sidebar check and opens the primary div -->
	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">
			<main class="site-main" id="main">
				<div class="blog-section-header">
					<div class="blog-section-header-grid greygrid-1">
						<h1 class="col-sm-6">
							District 3 Blog
						</h1>
						<h2 class="col-sm-6">Giving you the latest news and insights around innovation.</h2>
					</div>
				</div>
				<?php get_template_part( 'section-templates/filter-blog-3col-section'); ?>
				<div class="row">
				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>

					<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'global-templates/hero', 'none'); ?>
							<?php

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'loop-templates/content', get_post_format() );
							?>
					<?php endwhile; ?>
				<?php else : ?>

						<?php get_template_part( 'loop-templates/content', 'none' ); ?>

					<?php endif;?>
				</div>
				<div class="pagination-1"><?php understrap_pagination(); ?></div>
			</main><!-- #main -->
	</div>
			<!-- The pagination component -->
				
		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

			<?php get_sidebar( 'right' ); ?>

		<?php endif; ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
