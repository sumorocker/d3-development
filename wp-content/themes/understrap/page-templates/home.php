<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a Home page.
 *
 * @package understrap
 */
  get_header();
?>


<?php
	get_template_part('section-templates/header-section');
	get_template_part('section-templates/2col-buttons-txt-img-section');
	get_template_part('section-templates/2col-buttons-txt-img-second-section');
	get_template_part('section-templates/categories-img-txt-section');
	get_template_part('section-templates/portfolio-section');
	get_template_part('section-templates/blog-section');
?>

<?php
  get_footer();
?>