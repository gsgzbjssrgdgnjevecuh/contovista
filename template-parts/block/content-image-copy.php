<?php
/**
 * Block Name: Image & Copy
 */

$row = ( get_field('image_left') ) ? 'image-copy__wrapper--reverse' : ' '; 
$imageRight = ( get_field('image_left') ) ? 'image-copy__image--right' : ' '; 

$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';
?>

<section class="image-copy section logo-color logo-color-white" <?php echo $sectionId; ?> >
  <div class="container">
    <div class="image-copy__wrapper flex jcsb <?php echo $row; ?>">
      
      <div class="image-copy__image <?php echo $imageRight; ?>">
        <img 
          src="<?php echo esc_attr( get_field( 'image' )['sizes']['image-copy'] );  ?>"  
          alt="<?php echo esc_attr( get_field('image')['alt'] ); ?>"
          caption="<?php echo esc_attr( get_field('image')['caption'] ); ?>"
          description="<?php echo esc_attr( get_field('image')['description'] ); ?>">
        <?php if( get_field('text') ) : ?>
          <p class="text14 dark-sky-80"><?php echo the_field('text'); ?></p>
        <?php endif; ?>

        <?php if( get_field('author') ) : ?>
          <p class="text14 dark-sky-50"><?php echo the_field('author'); ?></p>
        <?php endif; ?>
      </div>

      <div class="image-copy__copy">
        <h2><?php echo the_field('title'); ?></h2> 
        <div class="textbox">
          <?php echo the_field('copy'); ?>
        </div>
      </div>

    </div>
  </div>
</section> 