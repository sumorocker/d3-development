<?php
/**
 * @package understrap
 */
?>

<div class="row justify-content-center">
    <div class="blog col-sm-3">
        <div class="img"> <img src="<?php the_field('col_1_img')?>" /> </div>
        <h2> <?php the_field("col_1_title") ?></h2>
        <p><?php the_field("col_1_body") ?></p>
    </div>
    <div class="blog col-sm-3">
      <div class="img"> <img src="<?php the_field('col_2_img')?>" /> </div>
        <h2> <?php the_field("col_2_title") ?></h2>
        <p><?php the_field("col_2_body") ?></p>
    </div>
    <div class="blog col-sm-3">
     <div class="img"> <img src="<?php the_field('col_3_img')?>" /> </div>
        <h2> <?php the_field("col_3_title") ?></h2>
        <p><?php the_field("col_3_body") ?></p>
    </div>
</div>