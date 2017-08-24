<?php
/**
 * @package understrap
 */
?>    
<div class="faq-section">
  <div class="main">
      <div class="row">
        <div class="faq-title-section col-sm-6">
          <h1>Faq</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique molestiae quia, ad praesentium. Porro, autem dignissimos dolores. Mollitia tempora, vel excepturi deleniti recusandae soluta atque!</p>
           <button type="button" class="<?php the_field('button_color'); ?>">
            <h2><?php the_field('header_button'); ?></h2>
           </button>
        </div>
        <div class="accordion col-sm-6">
        <?php if(have_rows('question_answer')) : while(have_rows('question_answer')) : the_row(); ?>
          <div class="accordion-section">
            <a class="accordion-section-title" href="#<?php the_sub_field('accordion_class'); ?>">
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