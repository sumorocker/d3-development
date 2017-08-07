<?php
/**
 * @package understrap
 */
?>

<div class="metrics-section">
  <div class="row">
    <div class="list-section col-sm-3 offset-sm-3">
      <ul>
      	<?php if(have_rows('list_header_left')) : while(have_rows('list_header_left')) : the_row(); ?>
          <li class="list-item">
            <h1 style="color:<?php the_field('font_color'); ?>"><?php the_sub_field('single_list_item_header_left');?></h1>
            <h2><?php the_sub_field('single_list_item_disc_left'); ?></h2>
          </li>
        <?php endwhile; endif; ?>
      </ul>
    </div>
    <div class="col-sm-5 offset-sm-1">
      <div class="header-image" style="background-image:url('<?php the_field('list_img') ?> ');">
        <div class="<?php the_field('inner_shape') ?>"></div>
      </div>
      <div class="list-section col-sm-8">
        <ul>
          <?php if(have_rows('list_header_right')) : while(have_rows('list_header_right')) : the_row(); ?>
          <li class="list-item">
            <h1 style="color:<?php the_field('font_color'); ?>"><?php the_sub_field('single_list_item_header_right');?></h1>
            <h2><?php the_sub_field('single_list_item_disc_right'); ?></h2>
          </li>
        <?php endwhile; endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
