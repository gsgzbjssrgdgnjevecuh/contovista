<?php
/**
 * Block Name: Columns
 */
$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';

?> 

<section class="section columns logo-color logo-color-dark" <?php echo $sectionId; ?>>
  <div class="container">
    <h2><?php echo get_field('section_title'); ?></h2>
    <div class="columns__wrapper flex row jcsb fww">

      <?php if( have_rows('columns') ): ?>
        <?php while( have_rows('columns') ): the_row(); ?>

          <?php if( get_sub_field('make_this_column_half_screen_width') ) : ?>
            <?php $columnHalfWidth = 'columns__column--half-width'; ?>
          <?php endif; ?>

          <div class="columns__column <?php echo $columnHalfWidth; ?>">

            <?php if( get_sub_field('icon') ) : ?>
              <div class="columns__column-icon">
                <img 
                  src="<?php echo esc_attr( get_sub_field( 'icon' )['url'] );  ?>" 
                  alt="<?php echo esc_attr( get_sub_field('icon')['alt'] ); ?>"
                  caption="<?php echo esc_attr( get_sub_field('icon')['caption'] ); ?>"
                  description="<?php echo esc_attr( get_sub_field('icon')['description'] ); ?>">
              </div>
            <?php endif; ?>

            <?php if( get_sub_field('title') ) : ?>
              <h4 class="fw700 columns__column-title flex"> 
                <?php if( get_sub_field('number') ) : ?>
                  <span 
                    class="columns__column-title-number"
                    data-number="<?php the_sub_field('number'); ?>"></span>
                <?php endif; ?>
                <span><?php the_sub_field('title'); ?></span>
              </h4>
            <?php endif; ?>

            <?php if( get_sub_field('description') ) : ?>
              <p class="dark-sky-80"><?php the_sub_field('description'); ?></p>
            <?php endif; ?>

          </div>

        <?php endwhile; ?> 
      <?php endif; ?>

    </div>
      
    <?php 
      $modalScript = get_field( 'modal_script' );
      $modalOpener = $modalScript ? "modal-opener" : " " ;
    ?>
    <!-- Button  -->
    <?php $buttonCheck = get_field( 'button' ); ?>
    <?php $button = get_field( 'button_link' ); ?>
    <?php if( $buttonCheck ) : ?>
      <?php $button_target = $button['target'] ? $button['target'] : '_self'; ?>
      <a 
        href="<?php echo esc_url( $button['url'] ); ?>" 
        class="btn btn--bordered btn--bordered--arrowed <?php echo $modalOpener; ?>"
        data-modal="modal-columns"
        target="<?php echo esc_attr( $button_target ); ?>">
        <?php echo $button['title'] ?> 
      </a>
    <?php endif; ?> 
    <!-- Button  -->
  </div>
</section>
<?php if( $modalScript ) : ?>
  <div class="modal modal--closed contact-form flex aic jcc" id="modal-columns">
    <div class="container">
      <div class="modal--close"></div>
      <?php echo $modalScript; ?>
    </div>
  </div>
<?php endif; ?>