<?php
  /**
  * Block Name: Hero
  */

  $title = get_field( 'title' );
  $smallerTitle = get_field( 'smaller_title' );
  $description = get_field( 'description' );
  $descriptionMobile = get_field( 'description_mobile' );
  $heroImage = get_field( 'hero_image' ); 

  $blueBackground = get_field( 'make_background_blue' ) ? "hero--blue" : " " ;
  $diagonalAtTheBottom = get_field( 'diagonal_at_the_bottom' ) ? "hero--diagonal" : "hero--main" ;

  $modalScript = get_field( 'modal_script' );
  $modalOpener = $modalScript ? "modal-opener" : " " ;
?>

<section class="hero <?php echo $diagonalAtTheBottom; ?> <?php echo $blueBackground; ?> logo-color logo-color-white">
  <div class="container container--<?php echo get_field( 'image_format' ); ?>">
    <div class="hero__wrapper flex row jscb">

      <?php if( !get_field( 'hero_image' ) ) : ?>
        <?php $textWidthWithoutImage = 'hero__info--no-image' ?>
      <?php endif; ?>
      <div class="hero__info <?php echo $textWidthWithoutImage; ?> hero__info--<?php echo get_field( 'width_of_the_text_box' ); ?> hero__info--for-<?php echo get_field( 'image_format' ); ?>-image">

        <!-- Article data  -->
        <?php if( get_post_type() === 'post' && $terms = wp_get_object_terms( get_the_id(), 'category' ) ) : ?>

          <?php 
          
            foreach ( $terms as $term ) {
              $page = get_field('page_link_for_the_category', 'category_'.$term->term_id);
              if( $page ){ 
                $pageLink = get_permalink( $page->ID );
              }
            }

          ?>
          <a 
            href="<?php echo $pageLink; ?>" 
            class="hero__go-back-link">
            <?php echo __('back to the overview', 'contovista'); ?>
          </a>
          <div class="article__data article__data--postpage flex row aic">
            <span><?php echo get_the_date(); ?></span>

            <?php 
              global $post;
              $words = str_word_count( $post->post_content );
              $minute = floor( $words / 200 );
            ?>
            <span><?php echo $minute . ' min read'; ?></span> 
          </div>
        <?php endif; ?>
        <!-- Article data  -->

        <!-- Titles  -->
        <?php if( $title ) : ?>
          <?php if( get_field( 'image_format' ) == 'standard' ) : ?>
            <h1 class="white"><?php echo $title ?></h1>
          <?php else : ?>
            <h1 class="white"><?php echo $title ?></h1>
          <?php endif; ?>
        <?php endif; ?> 

        <?php if( $smallerTitle ) : ?>
          <h2 class="white"><?php echo $smallerTitle ?></h2>
        <?php endif; ?>
        <!-- Titles  -->

        <!-- Description  -->
        <?php if( $description ) : ?>
          <p class="white hero__info-description-desktop"><?php echo $description ?></p>
        <?php endif; ?>
        <?php if( $descriptionMobile ) : ?>
          <p class="white hero__info-description-mobile"><?php echo $descriptionMobile ?></p>
        <?php endif; ?>
        <!-- Description  -->

        <!-- Button  -->
        <?php $buttonCheck = get_field( 'button' ); ?>
        <?php $button = get_field( 'button_link' ); ?>
        <?php if( $buttonCheck ) : ?>
          <?php $button_target = $button['target'] ? $button['target'] : '_self'; ?>
          <a 
            href="<?php echo esc_url( $button['url'] ); ?>" 
            class="btn <?php echo $modalOpener; ?>"
            data-modal="modal-hero"
            target="<?php echo esc_attr( $button_target ); ?>">
            <?php echo $button['title'] ?> 
          </a>
        <?php endif; ?> 
        <!-- Button  -->

        <!-- Clients slider  -->
        <?php if( !get_field( 'diagonal_at_the_bottom' ) ) : ?>

          <div class="hero__slider flex">
            <?php if( have_rows( 'client_logos' ) ) : ?>
              <?php while( have_rows( 'client_logos' ) ) : the_row(); ?> 
  
                <div class="hero__slide">
                <img 
                  class="no-lazy"
                  src="<?php echo esc_attr( get_sub_field( 'client_image' )['sizes']['logo'] );  ?>"   
                  alt="<?php echo esc_attr( get_sub_field( 'client_image' )['alt'] ); ?>"
                  caption="<?php echo esc_attr( get_sub_field( 'client_image' )['caption'] ); ?>"
                  description="<?php echo esc_attr( get_sub_field( 'client_image' )['description'] ); ?>">
                  
                </div>
  
              <?php endwhile; ?>
            <?php endif; ?>
          </div>

        <?php endif; ?>
        <!-- Clients slider  -->


      </div>

      <!-- Image  -->
      <?php if( get_field( 'hero_image' ) ) : ?>
        <div class="hero__image hero__image--<?php echo get_field( 'image_format' ); ?>"> 
          <img 
            class="no-lazy"
            src="<?php echo esc_attr( get_field( 'hero_image' )['url'] );  ?>" 
            alt="<?php echo esc_attr( get_field( 'hero_image' )['alt'] ); ?>"
            caption="<?php echo esc_attr( get_field( 'hero_image' )['caption'] ); ?>"
            description="<?php echo esc_attr( get_field( 'hero_image' )['description'] ); ?>">
        </div> 
      <?php endif; ?>
      <!-- Image  -->

    </div>
  </div>
</section> 


<?php if( $modalScript ) : ?>
  <div class="modal modal--closed contact-form flex aic jcc" id="modal-hero">
    <div class="container">
      <div class="modal--close"></div>
      <?php echo $modalScript; ?>
    </div>
  </div>
<?php endif; ?>
 