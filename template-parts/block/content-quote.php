<?php
/**
 * Block Name: Quote
 */
$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';

?>

<section class="quote section logo-color logo-color-dark" <?php echo $sectionId; ?> >
  <div class="container">
    <div class="quote__wrapper">
      <p class="dark-sky-80">«<?php echo get_field('quote'); ?>»</p>
      <p class="fw700"><?php echo get_field('author'); ?></p>
    </div>
  </div>
</section>

