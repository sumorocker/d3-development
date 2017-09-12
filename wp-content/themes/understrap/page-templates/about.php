<?php
/**
 * Template Name: About Page
 *
 * Template for displaying a blank page.
 *
 * @package understrap
 */
  get_header();
?>


<?php
  get_template_part('section-templates/header-section');
  get_template_part('section-templates/2col-txt-section');
  get_template_part('section-templates/profiles-section');
  get_template_part('section-templates/3col-list-second-section');
  get_template_part('section-templates/metrics-section');
  get_template_part('section-templates/3col-centered-section');
  get_template_part('section-templates/portfolio-section');
  get_template_part('section-templates/press-section');
?>

<?php
  get_footer();
?>