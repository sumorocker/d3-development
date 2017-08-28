<?php
/**
 * @package understrap
 */
?>

<div class="container-fluid cta-background" style="background-color:<?php the_field('background_color'); ?>; background-image:url('<?php the_field('cta_background')?>');background-repeat: no-repeat;background-position: center;">
  <div class='row cta-full-width justify-content-center'>
    <div class="text-center col-lg-6">
      <h1><?php the_field('cta_title')?></h1>
      <h3><?php the_field('cta_body')?></h3>
      <button type="button" class="<?php the_field('button_color'); ?>"><a href="<?php the_field('cta_button_link')?>"><h2><?php the_field('cta_button')?></h2></a></button>
    </div>
  </div>
</div>