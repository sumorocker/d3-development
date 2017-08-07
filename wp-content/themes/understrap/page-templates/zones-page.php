<?php
/**
 * Template Name: Zones Page Template
 *
 * Template for displaying a Zone page.
 *
 * @package understrap
 */

  get_header();
?>

<?php
  get_template_part('section-templates/header-section');
  get_template_part('section-templates/profiles-section');
  get_template_part('section-templates/partners-section');
  get_template_part('section-templates/3col-centered-section');
  get_template_part('section-templates/cta-section');
  get_template_part('section-templates/blog-footer-section');
  get_template_part('section-templates/list-with-img-section');
  get_template_part('section-templates/metrics-section');
  get_template_part('section-templates/2col-buttons-txt-img-section');
  get_template_part('section-templates/contact-section');
  get_template_part('section-templates/2col-txt-section');
  get_template_part('section-templates/categories-img-txt-section');
  get_template_part('section-templates/partners-section');
  get_template_part('section-templates/newsletter-section');
?>

<?php
	get_footer();
?>