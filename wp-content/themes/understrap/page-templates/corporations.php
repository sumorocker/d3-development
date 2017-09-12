<?php
/**
 * Template Name: Corporations Page
 *
 * Template for displaying a Corporations page.
 *
 * @package understrap
 */
  get_header();
?>


<?php
get_template_part('section-templates/header-section');
get_template_part('section-templates/list-with-img-section');
get_template_part('section-templates/portfolio-section');
get_template_part('section-templates/metrics-section');
get_template_part('section-templates/3col-list-section');
get_template_part('section-templates/profiles-section');
// get_template_part('section-templates/partners-section');
get_template_part('section-templates/cta-section');
?>

<?php
  get_footer();
?>