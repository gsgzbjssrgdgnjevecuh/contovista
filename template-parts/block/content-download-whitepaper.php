<?php
/**
 * Block Name: Image & Copy
 */ 

$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';
?>

<section class="whitepaper section logo-color logo-color-dark" <?php echo $sectionId; ?>>
  <div class="container">
    <div class="whitepaper__wrapper flex row aic jcsb">
      <h4 class="fw700 white"><?php echo the_field('title'); ?></h4>
      <a href="/" class="btn btn--download show-download-newspaper"><?php echo the_field('button_text'); ?></a>
    </div>
  </div>
</section> 
<div class="modal modal--closed modal--download-whitepaper contact-form flex aic jcc">
  <div class="container">
    <div class="modal--close"></div>
    <?php the_field('form_script'); ?>
  </div>
</div>