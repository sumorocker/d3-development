<?php
/**
 * @package understrap
 */
?>

<div class="header-section">
  <div class='row header-col-2'>
    <div class="header-text col-lg-6">
      <h1><?php the_field('header_title'); ?></h1>
      <h3><?php the_field('header_text'); ?></h3>
      <div class="header-section-button">
        <button type="button" class="btn">
          <h2><?php the_field('header_button'); ?></h2>
        </button>
      </div>
    </div>
    <div class="col-lg-6">
        <div class="image-right">
          <img src="<?php the_field('header_img'); ?>" alt="">
        </div>
        <div class="arrow-left"></div>
    </div>
  </div>
</div>