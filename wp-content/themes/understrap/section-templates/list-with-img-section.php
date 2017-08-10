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
  <img class="list-img" src="<?php the_field('background_img')?>" alt="">
  <img class="grid-1 scrollme animateme"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="300" src="<?php the_field('grid_2'); ?>" alt="">
  <div class='section-title col-sm-3 offset-4'>
        <h3><?php the_field('list_title'); ?></h3>
  </div>
  </div>
  <div class="row scrollme animateme"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="300">
    <div class="list-section col-sm-3 offset-sm-3">
    <?php if(have_rows('left_list_column')) : while(have_rows('left_list_column')) : the_row(); ?>
      <ul>
        <li class="list-item">
          <h2><?php the_sub_field('left_list_item_title'); ?></h2>
          <p><?php the_sub_field('left_list_item_body'); ?></p>
        </li>
      </ul>
      <?php endwhile; endif; ?>
    </div>
    <div class="col-sm-5 offset-sm-1">
    
      <div class="header-image-one" style="background-image:url('<?php the_field('right_img'); ?>');">
        <div class="inner-triangle"></div>
      </div>

      <div class="list-section col-sm-8">
      <?php if(have_rows('right_list_column')) : while(have_rows('right_list_column')) : the_row(); ?>
        <ul>
        <li class="list-item">
          <h2><?php the_sub_field('right_list_item_title'); ?></h2>
          <p><?php the_sub_field('right_list_item_body'); ?></p>
        </li>
      </ul>
      <?php endwhile; endif; ?>
      </div>
      
    </div>
  </div>
</div>




