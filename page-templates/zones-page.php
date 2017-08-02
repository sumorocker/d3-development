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
?>

<?php
	get_footer();
?>