<?php
/**
 * Block Name: Contact form
 */
$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';

?> 


<section class="section contact-form logo-color logo-color-dark" <?php echo $sectionId; ?> >

  <?php if( get_field( 'include_sidebar' ) ) : ?>

    <div class="container contact-form__wrapper--contact flex row aifs jcc"> 

      <div class="contact-form__wrapper">
        <?php echo the_field('contact_form_script'); ?>
      </div>

      <div class="contact-form__wrapper contact-form__sidebar">
        <h3><?php echo __('Contact', 'contovista'); ?></h3>

        <span class="dark-sky-80"><?php the_field('brand_name', 'option'); ?></span>

        <a class="dark-sky-80" href="<?php the_field('link_to_google_maps', 'option'); ?>" target="_blank"><?php the_field('address', 'option'); ?></a>
        <a class="teal" href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
        <a href="mailto:<?php the_field('email', 'option'); ?>" class="teal"><?php the_field('email', 'option'); ?></a>
      </div>
      
    </div>
    
  <?php else : ?>

    <div class="container"> 
      <?php echo the_field('contact_form_script'); ?>
    </div>

  <?php endif; ?>
</section> 