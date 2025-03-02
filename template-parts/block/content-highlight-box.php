<?php
/**
 * Block Name: Highlight box
 */

$background = ( get_field('background') ) ? ' ' : 'highlight-box--grey';
$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';

?>

<section class="highlight-box <?php echo $background; ?> section logo-color logo-color-dark" <?php echo $sectionId; ?>>

  <?php if( get_field('title') ) : ?> 
    <h3><?php echo the_field('title'); ?></h3>
  <?php endif; ?>

  <p><?php echo the_field('text'); ?></p>

  <?php if( get_field('button_title') ) : ?>
   
    <a 
      href="<?php echo the_field('button_link')?>" 
      class="btn btn--bordered btn--bordered--on-dark btn--bordered--arrowed btn--bordered--arrowed--on-dark">
      <?php echo the_field('button_title'); ?>
    </a>
   
  <?php endif; ?>

</section>  