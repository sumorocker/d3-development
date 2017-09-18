<?php
/**
 * @package understrap
 */
?>

<div class="metrics-section">
<!-- <img class="metric-section-bg" src="<?php the_field('metrics_section_bg'); ?>" alt=""> -->
<div class="row">
  <div class="offset-lg-2 col-lg-6">
    <h1 class="metrics_header text-underline-orange"><?php the_field('metrics_header'); ?></h1>
    <h2 class="metrics_subheader"><?php the_field('metrics_subheader'); ?></h2>
  </div>
	<div class="col-lg-2 offset-lg-7">
		<h1 class="metrics-list-title" style="text-decoration-color:<?php the_field('background_color'); ?>"><?php the_field('metrics_list_title'); ?></h1>
	</div>
</div>
   <div class="row scrollme animateme"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-translatey="300">
  <img class="metrics_background_shape" src="<?php the_field('metrics_background_shape'); ?> " alt="">
    <div class="list-section col-lg-3 offset-lg-3 col-sm-12">
      <ul>
      	<?php if(have_rows('list_header_left')) : while(have_rows('list_header_left')) : the_row(); ?>
          <li class="list-item">
            <h1 style="color:<?php the_field('background_color'); ?>"><?php the_sub_field('single_list_item_header_left');?></h1>
            <h2><?php the_sub_field('single_list_item_disc_left'); ?></h2>
          </li>
        <?php endwhile; endif; ?>
      </ul>
    </div>
    <div class="col-lg-5 offset-lg-1">
      <div class="header-image" style="background-image:url('<?php the_field('list_img') ?> ');">
      </div>
      <div class="metric-section-grid greygrid-1"></div>
      <div class="list-section col-lg-8 col-sm-12">
        <ul>
          <?php if(have_rows('list_header_right')) : while(have_rows('list_header_right')) : the_row(); ?>
          <li class="list-item">
            <h1 style="color:<?php the_field('background_color'); ?>"><?php the_sub_field('single_list_item_header_right');?></h1>
            <h2><?php the_sub_field('single_list_item_disc_right'); ?></h2>
          </li>
        <?php endwhile; endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
