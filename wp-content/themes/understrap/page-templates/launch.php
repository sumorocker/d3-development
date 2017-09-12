<?php
/**
 * Template Name: Sales Page
 *
 * Template for displaying a blank page.
 *
 * @package understrap
 */
  get_header();
?>


<?php
  get_template_part('section-templates/header-section');
  get_template_part('section-templates/2col-txt-first-section');
  get_template_part('section-templates/3col-list-section');
  get_template_part('section-templates/list-with-img-section');
  get_template_part('section-templates/2col-txt-section');
  get_template_part('section-templates/3col-centered-section');
  get_template_part('section-templates/portfolio-section');
  // get_template_part('section-templates/profiles-section');
  // get_template_part('section-templates/categories-img-txt-section');
  get_template_part('section-templates/categories-section');
  get_template_part('section-templates/3col-list-second-section');
  get_template_part('section-templates/cta-section');
  get_template_part('section-templates/faq-section');

?>

<?php
  get_footer();
?>