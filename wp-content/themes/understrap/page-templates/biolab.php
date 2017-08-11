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
get_template_part('section-templates/3col-list-second-section');
get_template_part('section-templates/profiles-section');
?>

<?php
  get_footer();
?>