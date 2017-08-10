<?php
/**
 * @package understrap
 */
?>

<div class="container-fluid">
  <div class='row cta-full-width justify-content-center'>
    <div class="text-center col-lg-6">
      <h1><?php the_field('cta_title')?></h1>
      <h3><?php the_field('cta_body')?></h3>
      <button type="button" class="<?php the_field('button_color'); ?>"><h2><?php the_field('cta_button')?></h2></button>
    </div>
  </div>
</div>