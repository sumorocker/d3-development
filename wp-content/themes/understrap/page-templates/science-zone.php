<?php
/**
 * Template Name: Science zone Page
 *
 * Template for displaying a Science zone page.
 *
 * @package understrap
 */
  get_header();
?>


<?php
get_template_part('section-templates/header-section');
// get_template_part('section-templates/2col-txt-section');
get_template_part('section-templates/2col-txt-first-section');
get_template_part('section-templates/3col-list-section');
get_template_part('section-templates/2col-buttons-txt-img-section');
get_template_part('section-templates/profiles-section');
get_template_part('section-templates/press-section');
get_template_part('section-templates/cta-section');
?>

<?php
  get_footer();
?>