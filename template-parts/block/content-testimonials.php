<?php
/**
 * Block Name: Columns
 */
$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';

?> 

<section class="section testimonials logo-color logo-color-dark" <?php echo $sectionId; ?> >
    <div class="container">
      <h2 class="mb40"><?php echo the_field('section_title'); ?></h2>
    </div>
  
    <div class="testimonials__wrapper flex row">

      <?php 
        $taxonomyTerm = get_field('testimonials'); 
        $args = array(  
          'post_type' => 'testimonials',
          'post_status' => 'publish',
          'posts_per_page' => -1, 
          'orderby' => 'title', 
          'order' => 'ASC', 
          'tax_query' => array(
            array(
              'taxonomy' => 'testimonials',
              'field' => 'slug',
              'terms' => $taxonomyTerm
            )
          )
        );

        $testimonials = new WP_Query( $args ); 
      ?>

      <?php if( $testimonials->have_posts() ) : ?>
        <?php while ( $testimonials->have_posts() ) : $testimonials->the_post();  ?> 

          <div class="testimonial">
            <div class="testimonial__logo">
              <img 
                src="<?php echo esc_attr( get_field( 'logo', get_the_ID() )['sizes']['logo'] );  ?>" 
                alt="<?php echo esc_attr( get_field( 'logo', get_the_ID() )['alt'] ); ?>"
                caption="<?php echo esc_attr( get_field( 'logo', get_the_ID() )['caption'] ); ?>"
                description="<?php echo esc_attr( get_field( 'logo', get_the_ID() )['description'] ); ?>"> 
            </div>
            <div class="testimonial__image">
              <img 
                src="<?php echo esc_attr( get_field( 'image', get_the_ID() )['sizes']['circle-thumb']);  ?>" 
                alt="<?php echo esc_attr( get_field( 'image', get_the_ID() )['alt'] ); ?>"
                caption="<?php echo esc_attr( get_field( 'image', get_the_ID() )['caption'] ); ?>"
                description="<?php echo esc_attr( get_field( 'image', get_the_ID() )['description'] ); ?>">
            </div>
            <h4 class="testimonial__title teal fw700"><?php the_title(); ?></h4>
            <h5 class="testimonial__subtitle fw700"><?php echo get_field( 'subtitle', get_the_ID() ); ?></h5>
            <p class="testimonial__text dark-sky-80">« <?php echo get_field( 'text', get_the_ID() ); ?> »</p>
          </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?> 

    </div>

</section> 