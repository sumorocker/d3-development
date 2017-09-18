<?php
/**
 * Template Name: Events Page Template
 *
 * Template for displaying a Zone page.
 *
 * @package understrap
 */
  get_header();
?>

<?php 
        get_template_part('section-templates/header-section');
        get_template_part('section-templates/3col-list-section');
        get_template_part('section-templates/2col-buttons-txt-img-section');
        get_template_part('section-templates/events-blog');
        get_template_part('section-templates/cta-section');
  ?>

<?php
	get_footer();
?>