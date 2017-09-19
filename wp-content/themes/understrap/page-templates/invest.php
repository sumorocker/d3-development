<?php
/**
 * Template Name: Invest Page
 *
 * Template for displaying a Invest page.
 *
 * @package understrap
 */
  get_header();
?>


<?php
	get_template_part('section-templates/header-section');
	get_template_part('section-templates/3col-centered-section');
  get_template_part('section-templates/categories-img-txt-section');
  get_template_part('section-templates/metrics-section');
  get_template_part('section-templates/contact-section');
  get_template_part('section-templates/blog-footer-section');
?>

<?php
  get_footer();
?>