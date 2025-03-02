
<?php
/**
 * Block Name: Clients logo slider
 */

?>


<section class="section">
  <div class="container">
    <div class="hero__slider hero__slider--independent flex">
      <?php if( have_rows( 'clients_logo_slider' ) ) : ?>
        <?php while( have_rows( 'clients_logo_slider' ) ) : the_row(); ?> 
    
          <div class="hero__slide">
          <img 
            src="<?php echo esc_attr( get_sub_field( 'image' )['sizes']['logo']);  ?>"  
            alt="<?php echo esc_attr( get_sub_field( 'image' )['alt'] ); ?>"
            caption="<?php echo esc_attr( get_sub_field( 'image' )['caption'] ); ?>"
            description="<?php echo esc_attr( get_sub_field( 'image' )['description'] ); ?>">
          </div>
    
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div> 
</section>

 