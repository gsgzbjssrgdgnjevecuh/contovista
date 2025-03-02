<?php
/**
 * Block Name: Scrollcopy
 */
$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';
?>

<section class="scrollcopy section logo-color logo-color-dark" <?php echo $sectionId; ?> >
  <div class="container">

    <div class="scrollcopy__wrapper flex row jcsb"> 

      <div class="scrollcopy__stickybar">
      <?php $dataScrollcopy = 1; ?>
      <?php if( have_rows('scrollcopy') ): ?>
        <?php while( have_rows('scrollcopy') ): the_row(); ?>

          <?php $activeHeadItem = (1 == $dataScrollcopy) ? 'scrollcopy__stickybar-item--active' : ' '; ?>

            <div 
              data-subtitle="<?php echo $dataScrollcopy; ?>"
              class="scrollcopy__stickybar-item <?php echo $activeHeadItem; ?>">
              <?php the_sub_field('subtitle'); ?>
            </div>
          
          <?php $dataScrollcopy ++; ?>
        <?php endwhile; ?> 
      <?php endif; ?>
      </div>

      <div class="scrollcopy__content">
      <?php $dataScrollcopyContent = 1; ?>
      <?php if( have_rows('scrollcopy') ): ?>
        <?php while( have_rows('scrollcopy') ): the_row(); ?>

          <?php $activeBodyItem = (1 == $dataScrollcopyContent) ? 'scrollcopy__content-item--active' : ' '; ?>
          <?php $activeBodySubtitleItem = (1 == $dataScrollcopyContent) ? 'scrollcopy__content-item-subtitle--active' : ' '; ?>

            <div 
              data-body-scrollcopy-content-item="<?php echo $dataScrollcopyContent; ?>"
              class="scrollcopy__content-item <?php echo $activeBodyItem; ?>">

              <div class="scrollcopy__content-item-subtitle <?php echo $activeBodySubtitleItem; ?>"><?php the_sub_field('subtitle'); ?></div>

              <?php if( get_sub_field('image') ) :?>
                <img 
                  src="<?php echo esc_attr( get_sub_field( 'image' )['sizes']['scrollcopy'] ); ?>"    
                  alt="<?php echo esc_attr( get_sub_field('image')['alt'] ); ?>"
                  caption="<?php echo esc_attr( get_sub_field('image')['caption'] ); ?>"
                  description="<?php echo esc_attr( get_sub_field('image')['description'] ); ?>">
              <?php endif; ?>

              <h3><?php the_sub_field('title'); ?></h3>

              <div class="textbox dark-sky-80">
                <?php the_sub_field('copy'); ?>
              </div>

              <!-- Button  -->
              <?php 
                $modalScript = get_sub_field( 'modal_script' );
                $modalOpener = $modalScript ? "modal-opener" : " " ;
              ?>
              
              <?php $buttonCheck = get_sub_field( 'button' ); ?>
              <?php $button = get_sub_field( 'button_link' ); ?>
              <?php if( $buttonCheck && $button ) : ?>
                <?php $button_target = isset($button['target']) ? $button['target'] : '_self'; ?>
                <a 
                  href="<?php echo esc_url( $button['url'] ); ?>" 
                  class="btn btn--arrowed <?php echo $modalOpener; ?>"
                  data-modal="modal-scrollcopy-<?php echo $dataScrollcopyContent; ?>"
                  target="<?php echo esc_attr( $button_target ); ?>">
                  <?php echo $button['title'] ?> 
                </a>
              <?php endif; ?> 
              <!-- Button  -->

            </div>

             <!-- Modal  -->
             <?php if( $modalScript ) : ?>
              <div class="modal modal--closed contact-form flex aic jcc" id="modal-scrollcopy-<?php echo $dataScrollcopyContent; ?>">
                <div class="container">
                  <div class="modal--close"></div>
                  <?php echo $modalScript; ?>
                </div>
              </div>
            <?php endif; ?>
            <!-- Modal  -->

          <?php $dataScrollcopyContent ++; ?>  
        <?php endwhile; ?> 
      <?php endif; ?>
      </div>

    </div>


  </div>
</section>
