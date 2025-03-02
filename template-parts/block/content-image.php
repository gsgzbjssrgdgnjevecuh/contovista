<?php
/**
 * Block Name: Image
 */
$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';

?>

<section class="image section logo-color logo-color-dark" <?php echo $sectionId; ?>>
  <div class="container">
    <div class="image__wrapper">
      
      <img 
        src="<?php echo esc_attr( get_field( 'image' )['sizes']['image']  ); ?>" 
        alt="<?php echo esc_attr( get_field('image')['alt'] ); ?>"
        caption="<?php echo esc_attr( get_field('image')['caption'] ); ?>"
        description="<?php echo esc_attr( get_field('image')['description'] ); ?>">

      <?php if( get_field('text') ) : ?>
        <p class="text14 dark-sky-80"><?php echo the_field('text'); ?></p>
      <?php endif; ?>

      <?php if( get_field('author') ) : ?>
        <p class="text14 dark-sky-50"><?php echo the_field('author'); ?></p>
      <?php endif; ?>

    </div>
  </div>
</section>  