<?php
/**
 * Block Name: Button
 */

 $modalScript = get_field( 'modal_script' );
 $modalOpener = $modalScript ? "modal-opener" : " " ;
 $modificatorClass = get_field( 'modificator_class' );
 $button = get_field( 'button_link' );
 $button_target = $button['target'] ? $button['target'] : '_self';
 $alignItToTheCenter = get_field( 'align_it_to_the_senter') ? 'btn--centered' : ' ';
?>

<div class="container section">
  <a 
    href="<?php echo esc_url( $button['url'] ); ?>" 
    data-modal="modal-<?php echo the_field( 'button_id' ); ?>"
    target="<?php echo esc_attr( $button_target ); ?>"
    id="<?php echo the_field( 'button_id' ); ?>"
    class="btn btn--<?php echo $modificatorClass; ?> <?php echo $alignItToTheCenter; ?> <?php echo $modalOpener; ?>">
    <?php echo $button['title'] ?> 

    <?php if( $modificatorClass == 'gradient') : ?>
      <span class="btn--gradient--span1"></span>
      <span class="btn--gradient--span2"></span>
    <?php endif; ?>
     
  </a>
</div>

<?php if( $modalScript ) : ?>
  <div 
    class="modal modal--closed contact-form flex aic jcc" 
    id="modal-<?php echo the_field( 'button_id' ); ?>">
    <div class="container">
      <div class="modal--close"></div>
      <?php echo $modalScript; ?>
    </div>
  </div>
<?php endif; ?>
 