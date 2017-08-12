<?php
/**
 * Template Name: Portfolio Page
 *
 * Template for displaying a portfolio page.
 *
 * @package understrap
 */
  get_header();
?>


<?php
	get_template_part('section-templates/header-section');
	get_template_part('section-templates/profiles-section');
  get_template_part('section-templates/metrics-section');
  get_template_part('section-templates/portfolio-section');
?>

<?php
  get_footer();
?>