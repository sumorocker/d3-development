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
	get_template_part('section-templates/profiles-section');
  get_template_part('section-templates/categories-section');
  get_template_part('section-templates/metrics-section');
  get_template_part('section-templates/cta-section');
  get_template_part('section-templates/blog-footer-section');
?>

<?php
  get_footer();
?>