<?php
/**
 * Block Name: Contact
 */

$diagonal = ( get_field('diagonal') ) ? 'contact--diagonal-down' : 'contact--diagonal-up'; 
$stick = ( get_field( 'stick_this_secton_to_footer' ) ) ? 'contact--footer-stick' : ' ';
$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';

?>

<section 
  style="background: linear-gradient(90deg, rgba(34, 236, 187, 0.5) 0%, rgba(6, 78, 96, 0.5) 28.12%, rgba(0, 41, 75, 0.5) 100%),url(<?php echo get_field('background_image');?>);background-position: center; background-repeat:no-repeat; background-size: cover;"
  class="section contact <?php echo $diagonal; ?> <?php echo $stick; ?> logo-color logo-color-white" <?php echo $sectionId; ?> >
  <div class="container">
    <div class="contact__wrapper">
      <h2 class="white"><?php echo get_field('title'); ?></h2>
      <p class="fw700 white"><?php echo get_field('subtitle'); ?></p>

      <!-- Button  -->
      <?php 
        $modalScript = get_field( 'modal_script' );
        $modalOpener = $modalScript ? "modal-opener" : " " ;
      ?>
 
      <?php $button = get_field( 'button_link' ); ?>
      <?php 
      if( $button && !is_wp_error($button) ){
      $button_target = isset($button['target']) && $button['target'] != '' ? $button['target'] : '_self'; ?>
      <a 
        href="<?php echo esc_url( $button['url'] ); ?>" 
        class="btn btn--gradient <?php echo $modalOpener; ?>"
        data-modal="modal-contacts"
        target="<?php echo esc_attr( $button_target ); ?>">
        <?php echo $button['title'] ?> 
        <span class="btn--gradient--span1"></span>
        <span class="btn--gradient--span2"></span>
      </a>
      
      <?php } ?>
      <!-- Button  -->


    </div>
  </div>
</section>  

<?php if( $modalScript ) : ?>
  <div class="modal modal--closed contact-form flex aic jcc" id="modal-contacts">
    <div class="container">
      <div class="modal--close"></div>
      <?php echo $modalScript; ?>
    </div>
  </div>
<?php endif; ?>  