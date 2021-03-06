<?php
/**
 * Template Name: Biolab Page
 *
 * Template for displaying a Biolab page.
 *
 * @package understrap
 */
  get_header();
?>


<?php
get_template_part('section-templates/header-section');
get_template_part('section-templates/2col-buttons-txt-img-section');
get_template_part('section-templates/3col-list-section');
get_template_part('section-templates/list-with-img-section');
get_template_part('section-templates/portfolio-section');
get_template_part('section-templates/3col-centered-section');
// get_template_part('section-templates/profiles-section');
get_template_part('section-templates/press-section');
get_template_part('section-templates/faq-section');
?>

<?php
  get_footer();
?>