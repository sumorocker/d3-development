<?php
/**
 * @package understrap
 */
?>    
<div class="faq-section">
  <div class="main">
      <div class="row">
        <div class="faq-title-section col-md-6 col-sm-12">
          <span><h1 style="border:2px solid <?php the_field('background_color') ?>" class="faq-title">FAQ</h1></span>
        </div>
        <div class="accordion col-md-6 col-sm-12">
        <?php if(have_rows('question_answer')) : while(have_rows('question_answer')) : the_row(); ?>
          <div class="accordion-section">
            <a class="accordion-section-title" style="border-bottom:1px solid <?php the_field('background_color') ?>" href="#<?php the_sub_field('accordion_class'); ?>">
              <?php the_sub_field('question'); ?>
            </a>
            <div id="<?php the_sub_field('accordion_class'); ?>" class="accordion-section-content">
              <p><?php the_sub_field('answer'); ?></p>
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
  </div>
</div>

<style>
.accordion-section-title:hover{
  background-color:<?php the_field('background_color'); ?>
}
</style>