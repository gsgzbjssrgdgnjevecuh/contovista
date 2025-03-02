<?php
/**
 * Block Name: Products 
 */
$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : ''; 

?> 

<section class="section products-tabs logo-color logo-color-white" <?php echo $sectionId; ?> >
  <div class="container">
    <h2 class="white"><?php echo get_field('section_title'); ?></h2>
    <div class="products-tabs__wrapper">

      <div class="products-tabs__header">
        <div class="products-tabs__header-wrapper flex row aic">

          <?php $headIndex = 1; ?>
          <?php if( have_rows('products') ): ?>
            <?php while( have_rows('products') ): the_row(); ?>

              <?php $activeHead = (1 == $headIndex) ? 'products-tabs__header-item--active' : ' '; ?>

              <div 
                class="products-tabs__header-item <?php echo $activeHead; ?>" 
                data-head-tab="<?php echo $headIndex; ?>">
                <?php the_sub_field('tab_title'); ?>
              </div>

              <?php $headIndex++; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div> 

      <div class="products-tabs__body">

      <?php $bodyIndex = 1; ?>
        <?php if( have_rows('products') ): ?>
          <?php while( have_rows('products') ): the_row(); ?>

            <?php $activeBody = (1 == $bodyIndex) ? 'products-tabs__body-item--active' : ' '; ?>

            <div class="products-tabs__body-item <?php echo $activeBody; ?>" data-body-tab="<?php echo $bodyIndex; ?>">
              <div class="products-tabs__body-item-info">
                <h4 class="white"><?php the_sub_field('title'); ?></h4>
                <p class="white"><?php the_sub_field('description'); ?></p>

                <!-- Button  -->
                <?php 
                  $modalScript = get_sub_field( 'modal_script' );
                  $modalOpener = $modalScript ? "modal-opener" : " " ;
                ?>
                
                <?php $buttonCheck = get_sub_field( 'button' ); ?>
                <?php $button = get_sub_field( 'button_link' ); ?>
                <?php if( $buttonCheck ) : ?>
                  <?php $button_target = $button['target'] ? $button['target'] : '_self'; ?>
                  <a 
                    href="<?php echo esc_url( $button['url'] ); ?>" 
                    class="btn btn--bordered btn--bordered--on-dark btn--bordered--arrowed btn--bordered--arrowed--on-dark <?php echo $modalOpener; ?>"
                    data-modal="modal-products-<?php echo $bodyIndex; ?>"
                    target="<?php echo esc_attr( $button_target ); ?>">
                    <?php echo $button['title'] ?> 
                  </a>
                <?php endif; ?> 
                <!-- Button  -->


              </div>
              <div class="products-tabs__body-item-image">
                <img 
                  src="<?php echo esc_attr( get_sub_field( 'image' )['sizes']['product-tabs'] );  ?>" 
                  alt="<?php echo esc_attr( get_sub_field('image')['alt'] ); ?>"
                  caption="<?php echo esc_attr( get_sub_field('image')['caption'] ); ?>"
                  description="<?php echo esc_attr( get_sub_field('image')['description'] ); ?>">
              </div>
            </div> 

            <!-- Modal  -->
            <?php if( $modalScript ) : ?>
              <div class="modal modal--closed contact-form flex aic jcc" id="modal-products-<?php echo $bodyIndex; ?>">
                <div class="container">
                  <div class="modal--close"></div>
                  <?php echo $modalScript; ?>
                </div>
              </div>
            <?php endif; ?>
            <!-- Modal  -->

            <?php $bodyIndex ++; ?>  
          <?php endwhile; ?>
        <?php endif; ?>

      </div> 
    </div>
    <div class="products-tabs--pagination flex row">
      <?php for( $i = 1; $i <= $bodyIndex-1; $i++ ) : ?>
        <?php $activePaginator = ( 1 == $i ) ? 'products-tabs--pagination-item--active' : ''; ?>
        <div  
          class="products-tabs--pagination-item <?php echo $activePaginator; ?>"
          data-paginator-index="<?php echo $i; ?>">
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section> 
 