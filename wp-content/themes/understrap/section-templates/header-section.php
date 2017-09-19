<?php
/**
 * @package understrap
 */
?>

<div class="header-section">
  <div class='row header-col-2 justify-content-center' style="flex-direction:<?php the_field('image_align'); ?>;">
  <div class="lines"></div>
  <!--  -->
    <div class="header-text col-lg-6 col-sm-12" >
    <div class="header_background_grid greygrid-1">
    </div>
      <h1 style="text-align:<?php the_field('header_text_align'); ?>;text-decoration-color: <?php the_field('background_color'); ?>"><?php the_field('header_title'); ?></h1>
      <h3 style="text-align:<?php the_field('header_text_align'); ?>;" ><?php the_field('header_text'); ?></h3>
      <div class="header-section-button" style="display:<?php the_field('display_button'); ?>">
         <button style="display: <?php the_field('header_button_display'); ?>" type="button" class="<?php the_field('button_color'); ?>"><a href="<?php the_field('header_button_link'); ?>">
          <h2><?php the_field('header_button'); ?></h2></a>
        </button>
      </div>
    </div>
    <?php if(is_page('home')){ ?>
      <div>
          <label id="arrow">
            <p>Explore our Community</p>
            <button style="button:focus {outline:0;}"type="button"></button>
          </label>
      </div>
    <?php }else{ ?>
      <div></div>
    <?php } ?>
    <div class="col-lg-6 col-sm-12" style="display:<?php the_field('image_display'); ?>">
        <div class="image-right" style="background-image:url('<?php the_field('header_img'); ?>')";>
          <!-- <img src="" alt=""> -->
        </div>
    </div>
  </div>
</div>