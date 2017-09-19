<?php
/**
 * @package understrap
 */
?>
 <?php if(is_page('singularity-university')){ ?>
<!-- Bizzabo Tickets Widget Start -->
<h1 style="text-align:center">Get Your Tickets Now</h1>
<div class="bizzabo-tickets-widget" data-event-id="205502" data-params="isInMinisite=true&widgetId=12543"></div>
<a href="https://www.bizzabo.com?utm_source=tickets_widget&utm_medium=powered_by&utm_campaign=tickets_widget" target="_blank" style="text-align: right; padding-right: 17px; text-decoration: none; width: 100%; display: inline-block; margin-top: 5px; box-sizing: border-box;" class="bizzabo-link-class">Powered by Bizzabo</a>
<script type="text/javascript">(function(){var bz=document.createElement("script");bz.type="text/javascript";bz.async=true;bz.src="https://organizer.bizzabo.com/widgets/tickets/tickets.js";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(bz,s);})();</script>
<!-- Bizzabo Tickets Widget End -->


<?php }else{ ?>
<div class="container-fluid cta-background" style="background-color:<?php the_field('background_color'); ?>; background-image:url('<?php the_field('cta_background')?>');background-repeat: no-repeat;background-position: center;">
  <div class='row cta-full-width justify-content-center'>
    <div class="text-center col-lg-8">
      <h1><?php the_field('cta_title')?></h1>
      <h3><?php the_field('cta_body')?></h3>
      <a href="<?php the_field('cta_button_link')?>"><button type="button" class="cta-button <?php the_field('cta_button_color'); ?>"><?php the_field('cta_button')?></button></a>
    </div>
  </div>
</div>
<?php }; ?>