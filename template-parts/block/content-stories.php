<?php
/**
 * Block Name: Stories
 */
$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';

?>

<section class="stories section logo-color logo-color-dark" <?php echo $sectionId; ?> >
  <div class="container flex row jcsb">

    <?php $storyLeft = get_field('story_left'); ?>
    <?php if( $storyLeft ): ?>
 
      <?php $leftImageSize = ( get_field( 'image_size', $storyLeft->ID ) ) ? 'wide' : 'narrow'; ?>
      <div 
        class="story flex column jcfe" 
        style="background:linear-gradient(180deg, rgba(0, 41, 75, 0) 0%, rgba(0, 41, 75, 0.75) 100%), url(<?php echo get_field( 'background_image', $storyLeft->ID )['sizes']['story']; ?>);background-size:cover;background-position:center;background-repeat:no-repeat;">
        <div class="story__button"></div>
        <div class="story__image story__image--<?php echo $leftImageSize; ?>">
          <img 
            src="<?php echo esc_attr( get_field( 'image', $storyLeft->ID )['sizes']['story-small'] );  ?>" 
            alt="<?php echo esc_attr( get_field( 'image', $storyLeft->ID )['alt'] ); ?>"
            caption="<?php echo esc_attr( get_field( 'image', $storyLeft->ID )['caption'] ); ?>"
            description="<?php echo esc_attr( get_field( 'image', $storyLeft->ID )['description'] ); ?>">
        </div>
        <div class="story__logo">
          <img 
            src="<?php echo esc_attr( get_field( 'logo', $storyLeft->ID )['url'] );  ?>" 
            alt="<?php echo esc_attr( get_field( 'logo', $storyLeft->ID )['alt'] ); ?>"
            caption="<?php echo esc_attr( get_field( 'logo', $storyLeft->ID )['caption'] ); ?>"
            description="<?php echo esc_attr( get_field( 'logo', $storyLeft->ID )['description'] ); ?>">
        </div>
        <div class="story__title">
          <h3 class="white fw700 <?php echo $leftImageSize; ?>"><?php echo esc_html( $storyLeft->post_title ); ?></h3>
        </div>
        <div class="story__text">
          <p class="white"><?php echo get_field( 'text', $storyLeft->ID ); ?></p>
        </div>

        <!-- Button  -->
        <?php 
          $modalScriptLeft = get_field( 'modal_script', $storyLeft->ID );
          $modalOpenerLeft = $modalScriptLeft ? "modal-opener" : " " ;
        ?>
        <?php $buttonCheck = get_field( 'button', $storyLeft->ID ); ?>
        <?php $button = get_field( 'button_link', $storyLeft->ID ); ?>
        <?php if( $buttonCheck ) : ?>
          <?php $button_target = $button['target'] ? $button['target'] : '_self'; ?>
          <a 
            href="<?php echo esc_url( $button['url'] ); ?>" 
            class="btn btn--bordered btn--bordered--on-dark btn--bordered--arrowed  btn--bordered--arrowed--on-dark <?php echo $modalOpenerLeft; ?>"
            data-modal="modal-story-<?php echo $storyLeft->ID; ?>"
            target="<?php echo esc_attr( $button_target ); ?>">
            <?php echo $button['title'] ?> 
          </a>
        <?php endif; ?> 
        <!-- Button  --> 


      </div>
      <!-- Modal  -->
      <?php if( $modalScriptLeft ) : ?>
        <div class="modal modal--closed contact-form flex aic jcc" id="modal-story-<?php echo $storyLeft->ID; ?>">
          <div class="container">
            <div class="modal--close"></div>
            <?php echo $modalScriptLeft; ?>
          </div>
        </div>
      <?php endif; ?> 
      <!-- Modal  -->

    <?php endif; ?>

    <?php $storyRight = get_field('story_right'); ?>
    <?php if( $storyRight ): ?>
 
      <?php $rightImageSize = ( get_field( 'image_size', $storyRight->ID ) ) ? 'wide' : 'narrow'; ?>
      <div 
        class="story flex column jcfe" 
        style="background:linear-gradient(180deg, rgba(0, 41, 75, 0) 0%, rgba(0, 41, 75, 0.75) 100%), url(<?php echo get_field( 'background_image', $storyRight->ID )['sizes']['story']; ?>);background-size:cover;background-position:center;background-repeat:no-repeat;">
        <div class="story__button"></div>
        <div class="story__image story__image--<?php echo $rightImageSize; ?>">
          <img 
            src="<?php echo esc_attr( get_field( 'image', $storyRight->ID )['sizes']['story-small'] );  ?>" 
            alt="<?php echo esc_attr( get_field( 'image', $storyRight->ID )['alt'] ); ?>"
            caption="<?php echo esc_attr( get_field( 'image', $storyRight->ID )['caption'] ); ?>"
            description="<?php echo esc_attr( get_field( 'image', $storyRight->ID )['description'] ); ?>">
        </div>
        <div class="story__logo">
          <img 
            src="<?php echo esc_attr( get_field( 'logo', $storyRight->ID )['url'] );  ?>" 
            alt="<?php echo esc_attr( get_field( 'logo', $storyRight->ID )['alt'] ); ?>"
            caption="<?php echo esc_attr( get_field( 'logo', $storyRight->ID )['caption'] ); ?>"
            description="<?php echo esc_attr( get_field( 'logo', $storyRight->ID )['description'] ); ?>">
        </div>
        <div class="story__title">
          <h3 class="white fw700 <?php echo $rightImageSize; ?>"><?php echo esc_html( $storyRight->post_title ); ?></h3>
        </div>
        <div class="story__text">
          <p class="white"><?php echo get_field( 'text', $storyRight->ID ); ?></p>
        </div>

        <!-- Button  -->
        <?php 
          $modalScriptRight = get_field( 'modal_script', $storyRight->ID );
          $modalOpenerRight = $modalScriptRight ? "modal-opener" : " " ;
        ?>
        <?php $buttonCheck = get_field( 'button', $storyRight->ID ); ?>
        <?php $button = get_field( 'button_link', $storyRight->ID ); ?>
        <?php if( $buttonCheck ) : ?>
          <?php $button_target = $button['target'] ? $button['target'] : '_self'; ?>
          <a 
            href="<?php echo esc_url( $button['url'] ); ?>" 
            class="btn btn--bordered btn--bordered--on-dark btn--bordered--arrowed btn--bordered--arrowed--on-dark <?php echo $modalOpenerRight; ?>"
            data-modal="modal-story-<?php echo $storyRight->ID; ?>"
            target="<?php echo esc_attr( $button_target ); ?>">
            <?php echo $button['title'] ?> 
          </a>
        <?php endif; ?> 
        <!-- Button  --> 

      </div>

      <!-- Modal  -->
      <?php if( $modalScriptRight ) : ?>
        <div class="modal modal--closed contact-form flex aic jcc" id="modal-story-<?php echo $storyRight->ID; ?>">
          <div class="container">
            <div class="modal--close"></div>
            <?php echo $modalScriptRight; ?>
          </div>
        </div>
      <?php endif; ?> 
      <!-- Modal  -->

    <?php endif; ?>
    
  </div>
</section>     