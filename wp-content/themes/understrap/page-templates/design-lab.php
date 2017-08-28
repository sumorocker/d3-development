<?php
/**
 * Template Name: Design Lab Page
 *
 * Template for displaying a Invest page.
 *
 * @package understrap
 */
  get_header();
?>


<?php
	get_template_part('section-templates/header-section');
	get_template_part('section-templates/2col-txt-first-section');
	get_template_part('section-templates/3col-list-section');
  	get_template_part('section-templates/profiles-section');
  	get_template_part('section-templates/3col-centered-section');
  	get_template_part('section-templates/cta-section');
  	get_template_part('section-templates/faq-section');
  	get_template_part('section-templates/partners-section');
?>

<?php
  get_footer();
?>