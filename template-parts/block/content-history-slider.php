<?php
/**
 * Block Name: History sider 
 */

$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';
?>

<section class="history-slider section logo-color logo-color-dark" <?php echo $sectionId; ?> >
  <div class="container">
    <h2><?php echo the_field('section_title'); ?></h2>
    <div class="history-slider__wrapper flex row">

      <?php if( have_rows('slide') ): ?>
        <?php while( have_rows('slide') ): the_row(); ?>

        <div  
          class="history-slider__slide" 
          data-year="<?php echo the_sub_field('year'); ?>">

          <div class="history-slider__slide-image">
            <img 
              src="<?php echo esc_attr( get_sub_field( 'image' )['sizes']['history-slider']  );  ?>" 
              alt="<?php echo esc_attr( get_sub_field('image')['alt'] ); ?>"
              caption="<?php echo esc_attr( get_sub_field('image')['caption'] ); ?>"
              description="<?php echo esc_attr( get_sub_field('image')['description'] ); ?>">
          </div>

          <div class="history-slider__slide-info">
            <h4 class="history-slider__slide-title fw700">
              <?php echo the_sub_field('title'); ?>
            </h4>
            <div class="textbox"><?php echo the_sub_field('text'); ?></div>
          </div>

        </div>
        
        <?php endwhile; ?> 
      <?php endif; ?>

    </div>
    <div class="history-slider__dots">
      <div class="history-slider__dots-track"></div>
    </div>
  </div>
</section>