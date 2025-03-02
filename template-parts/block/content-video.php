<?php
/**
 * Block Name: Video
 */
$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';

?>

<section class="video section logo-color logo-color-white" <?php echo $sectionId; ?> >
  <div class="container">
    <div class="video__wrapper">
      <?php if( get_field('title') ) : ?>
        <h2><?php echo the_field('title'); ?></h2>
      <?php endif; ?>
      
      <div class="video__inner-wrapper">
       

        <iframe 
          src="https://www.youtube.com/embed/<?php echo the_field('video'); ?>"
          title="YouTube video player" 
          frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; web-share" 
          allowfullscreen>
        </iframe>

        <!-- <div class="video__inner-wrapper-start-button">
          <svg class="video-start" viewBox="0 0 92 92" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle opacity="0.9" cx="46" cy="46" r="46" fill="#00294B"/>
            <path d="M66 46.5L35.25 64.2535L35.25 28.7465L66 46.5Z" fill="#22ECBB"/>
          </svg>

        </div> -->

      </div>


      <?php if( get_field('text') ) : ?>
        <p class="text14 dark-sky-80"><?php echo the_field('text'); ?></p>
      <?php endif; ?>

      <?php if( get_field('author') ) : ?>
        <p class="text14 dark-sky-50"><?php echo the_field('author'); ?></p>
      <?php endif; ?>

    </div>
  </div>
</section>    