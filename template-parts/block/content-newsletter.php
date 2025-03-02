<?php
/**
 * Block Name: Newsletter
 */
$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';
?>

<section class="newsletter newsletter--normal section flex row jcsb logo-color logo-color-dark" <?php echo $sectionId; ?> >

  <div class="newsletter__wrapper">
    <h2 class="white"><?php the_field('title'); ?></h2>
    <p class="white"><?php the_field('text'); ?></p>
    <button class="btn show-newsletter"><?php the_field('button_title'); ?></button>  
  </div>
  <div class="newsletter__image">
    <img 
      src="<?php echo esc_attr( get_field( 'image' )['url'] );  ?>" 
      alt="<?php echo esc_attr( get_field('image')['alt'] ); ?>"
      caption="<?php echo esc_attr( get_field('image')['caption'] ); ?>"
      description="<?php echo esc_attr( get_field('image')['description'] ); ?>">
  </div>

</section>

<div class="modal modal--closed modal--newsletter contact-form flex aic jcc">
  <div class="container">
    <div class="modal--close"></div>
    <?php the_field('form_script'); ?> 
  </div>
</div>