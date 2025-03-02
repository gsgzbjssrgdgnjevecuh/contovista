<?php
/**
 * Block Name: Services
 */
$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';
?>

<section class="section services logo-color logo-color-dark" <?php echo $sectionId; ?> >
  <div class="container">
    <h2><?php echo get_field('section_title'); ?></h2>
    <div class="services__wrapper">

      <?php $serviceItemIndex = 1; ?>
      <?php if( have_rows('services') ): ?>
        <?php while( have_rows('services') ): the_row(); ?>

          <?php $button = get_sub_field( 'button_link' ); 
            if( $button ){
          ?>
          <?php $button_target = isset($button['target']) ? $button['target'] : '_self'; ?>
          <a 
            href="<?php echo esc_url( $button['url'] ); ?>"
            target="<?php echo esc_attr( $button_target ); ?>"
            class="services__item services__item--hidden"
            style="transition-delay: <?php echo $serviceItemIndex; ?>00ms;">
            <div class="services__item--wrapper">
              <div class="services__item-image">
                <img 
                    src="<?php echo esc_attr( get_sub_field( 'image' )['sizes']['circle-thumb'] );  ?>"  
                    alt="<?php echo esc_attr( get_sub_field('image')['alt'] ); ?>"
                    caption="<?php echo esc_attr( get_sub_field('image')['caption'] ); ?>"
                    description="<?php echo esc_attr( get_sub_field('image')['description'] ); ?>">
              </div>
              <h4 class="services__item-title fw700"><?php the_sub_field('title'); ?></h4>
              <div class="services__item-description"><?php the_sub_field('description'); ?></div>
              <?php if( $button['title'] ) : ?>
                <div class="services__item-button btn btn--bordered btn--bordered--arrowed"><?php echo $button['title'] ?> </div>
              <?php endif; ?>
            </div>
          </a>
          <?php } ?> 

          <?php $serviceItemIndex+=3; ?> 
        <?php endwhile; ?> 
      <?php endif; ?>
      
    </div>
  </div>  
</section>   