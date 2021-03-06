<?php
/**
 * @package understrap
 */
?>

<div class="list-w-img-section" style="background-image:url('<?php the_field('background_img_2'); ?>">
  <div class="row scrollme animateme"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="400">
  <div class="section-image col-sm-3" style="background-image:url('<?php the_field('left_img'); ?>');"></div>
  <div class="list-section col-sm-4">
    <?php if(have_rows('left_list_column')) : while(have_rows('left_list_column')) : the_row(); ?>
      <ul>
        <li class="list-item">
          <h2><span class="list-style-add" style="color:<?php the_field('background_color') ?>">+ </span><?php the_sub_field('left_list_item_title'); ?></h2>
          <p><?php the_sub_field('left_list_item_body'); ?></p>
        </li>
      </ul>
      <?php endwhile; endif; ?>
  </div>
  <img class="grid-1 scrollme animateme"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="300" src="<?php the_field('grid_2'); ?>" alt="">
  <div class='section-title col-sm-4'>
        <div id="list-grid" class="greygrid-1"></div>
          <h1 style="color: <?php the_field('background_color') ?> "><?php the_field('list_title'); ?></h1>
  </div>
  </div>
  <div class="row scrollme animateme"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="300">
        <div class="lines"></div>
        <div class="background-img"><img src="<?php the_field('background-img'); ?>"/></div>
    <div class="list-section col-sm-4 offset-sm-3">
    <?php if(have_rows('right_list_column')) : while(have_rows('right_list_column')) : the_row(); ?>
        <ul>
        <li class="list-item">
          <h2><span class="list-style-add" style="color:<?php the_field('background_color') ?>">+ </span><?php the_sub_field('right_list_item_title'); ?></h2>
          <p><?php the_sub_field('right_list_item_body'); ?></p>
        </li>
      </ul>
      <?php endwhile; endif; ?>
    </div>
    <div class="col-sm-5">
      <div class="header-image-one" style="background-image:url('<?php the_field('right_img'); ?>');">
      
    </div>
  </div>
</div>




