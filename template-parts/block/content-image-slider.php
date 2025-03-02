<?php
/**
 * Block Name: Image slider
 */
$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';
?>

<section class="image-slider section logo-color logo-color-dark" <?php echo $sectionId; ?> >
  <div class="image-slider__wrapper flex row">
    <?php if( have_rows('image_slider') ): ?>
      <?php while( have_rows('image_slider') ): the_row(); ?>

        <div class="image-slider__slide">
          <img 
            src="<?php echo esc_attr( get_sub_field( 'image' )['sizes']['scrollcopy'] );  ?>"  
            alt="<?php echo esc_attr( get_sub_field('image')['alt'] ); ?>"
            caption="<?php echo esc_attr( get_sub_field('image')['caption'] ); ?>"
            description="<?php echo esc_attr( get_sub_field('image')['description'] ); ?>">
        </div>  

      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

