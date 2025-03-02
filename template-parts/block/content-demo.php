<?php
/**
 * Block Name: Demo 
 */

$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';
?>

<section class="section demo logo-color logo-color-dark" <?php echo $sectionId; ?> >
  <div class="container">
    <h2><?php echo get_field('section_title'); ?></h2>

    <div class="demo__wrapper flex jcfe">

      <div class="demo__items">
      <?php $dataDemoItem = 1; ?>
      <?php if( have_rows('demo') ): ?>
        <?php while( have_rows('demo') ): the_row(); ?>

          <?php $activeItem = (1 == $dataDemoItem) ? 'demo__item--active' : ' '; ?>

          <div class="demo__item <?php echo $activeItem; ?>" data-demo-item="<?php echo $dataDemoItem; ?>">

            <div class="demo__item-image <?php echo $activeImage; ?>">
              <img 
                src="<?php echo esc_attr( get_sub_field( 'image' )['sizes']['demo'] );  ?>"  
                alt="<?php echo esc_attr( get_sub_field('image')['alt'] ); ?>"
                caption="<?php echo esc_attr( get_sub_field('image')['caption'] ); ?>"
                description="<?php echo esc_attr( get_sub_field('image')['description'] ); ?>">
            </div>

            <div class="demo__item-wrapper flex row aifs">
              <div class="demo__item-num flex aic jcc"><?php echo $dataDemoItem; ?></div>
              <div class="demo__item-info">
                <h5 class="demo__item-title fw700"><?php the_sub_field('title'); ?></h5>
                <div class="demo__item-description">
                  <p><?php the_sub_field('description'); ?></p>
                </div>
              </div>
            </div>

          </div>
        
          <?php $dataDemoItem ++; ?>
        <?php endwhile; ?> 
      <?php endif; ?>
      </div>

    </div>


    <!-- Button  -->
    <?php 
      $modalScript = get_field( 'modal_script' );
      $modalOpener = $modalScript ? "modal-opener" : " " ;
    ?> 

    <?php $buttonCheck = get_field( 'button' ); ?>
    <?php $button = get_field( 'button_link' ); ?>
    <?php if( $buttonCheck ) : ?>
      <?php $button_target = $button['target'] ? $button['target'] : '_self'; ?>
      <a 
        href="<?php echo esc_url( $button['url'] ); ?>" 
        class="btn <?php echo $modalOpener; ?>"
        data-modal="modal-demo"
        target="<?php echo esc_attr( $button_target ); ?>">
        <?php echo $button['title'] ?> 
      </a>
    <?php endif; ?> 
    <!-- Button  -->

  </div> 
</section>

<?php if( $modalScript ) : ?>
  <div class="modal modal--closed contact-form flex aic jcc" id="modal-demo">
    <div class="container">
      <div class="modal--close"></div>
      <?php echo $modalScript; ?>
    </div>
  </div>
<?php endif; ?>