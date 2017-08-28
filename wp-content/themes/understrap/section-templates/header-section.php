<?php
/**
 * @package understrap
 */
?>

<div class="header-section">
  <div class='row header-col-2 justify-content-center' style="flex-direction:<?php the_field('image_align'); ?>;">
  <div class="lines"></div>
    <div class="header-text col-sm-6" >
      <h1 style="text-align:<?php the_field('header_text_align'); ?>;" ><?php the_field('header_title'); ?></h1>
      <h3 style="text-align:<?php the_field('header_text_align'); ?>;" ><?php the_field('header_text'); ?></h3>
      <div class="header-section-button" style="display:<?php the_field('display_button'); ?>">
         <button style="display: <?php the_field('header_button_display'); ?>" type="button" class="<?php the_field('button_color'); ?>"><a href="<?php the_field('header_button_link'); ?>">
          <h2><?php the_field('header_button'); ?></h2></a>
        </button>
      </div>
    </div>
    <div class="col-sm-6" style="display:<?php the_field('image_display'); ?>">
        <div class="image-right" >
          <img src="<?php the_field('header_img'); ?>" alt="">
        </div>
    </div>
  </div>
</div>