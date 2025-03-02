<?php
/**
 * Block Name: Title & bulletpoints
 */

$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';
?>

<section class="title-copy section logo-color logo-color-dark" <?php echo $sectionId; ?> >
  <div class="container">
    <div class="title-copy__wrapper">
      <h2><?php echo get_field('title'); ?></h2>
      <?php echo get_field('bulletpoints'); ?>
    </div>
  </div>
</section>