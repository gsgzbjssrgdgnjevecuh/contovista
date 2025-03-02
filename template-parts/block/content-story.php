<?php
/**
 * Block Name: Stories
 */

?>

<section class="stories section">
  <div class="container flex row jcsb">

    <?php echo the_field('test'); ?>

    
    <?php if( have_rows('stories') ): ?>
      <?php while( have_rows('stories') ): the_row(); ?>

      <?php echo the_sub_field('story'); ?>

      <div 
        class="story flex column jcfe" 
        style="background:linear-gradient(180deg, rgba(0, 41, 75, 0) 0%, rgba(0, 41, 75, 0.75) 100%), url(https://wordpress-113628-2820710.cloudwaysapps.com/wp-content/uploads/2022/09/placeholder-product-1024x571.png);background-size:cover;background-position:center;background-repeat:no-repeat;">
        <div class="story__button"></div>
        <div class="story__image story__image--narrow">
          <img src="https://wordpress-113628-2820710.cloudwaysapps.com/wp-content/uploads/2022/08/iphone.svg" alt="">
        </div>
        <div class="story__logo">
          <img src="https://wordpress-113628-2820710.cloudwaysapps.com/wp-content/uploads/2022/09/Vector.svg" alt="">
        </div>
        <div class="story__title">
          <h3 class="white fw700 narrow">First comprehensive multibanking solution</h3>
        </div>
        <div class="story__text">
          <p class="white">Together with Valiant Bank, we were able to introduce the first comprehensive multibanking solution in Switzerland in September 2019. Since then, business customers of Valiant Bank have been able to aggregate all third-party bank accounts via a central financial cockpit and manage liquidity via a single bank account.</p>
        </div>
        <a href="/" class="btn btn--bordered btn--bordered--on-dark btn--bordered--arrowed btn--bordered--arrowed--on-dark">Learn more</a>
      </div>

      <?php endwhile; ?>
    <?php endif; ?>

    <!-- <div 
      class="story flex column jcfe" 
      style="background:linear-gradient(180deg, rgba(0, 41, 75, 0) 0%, rgba(0, 41, 75, 0.75) 100%), url(https://wordpress-113628-2820710.cloudwaysapps.com/wp-content/uploads/2022/09/placeholder-product-1024x571.png);background-size:cover;background-position:center;background-repeat:no-repeat;">
      <div class="story__button"></div>
      <div class="story__image story__image--narrow">
        <img src="https://wordpress-113628-2820710.cloudwaysapps.com/wp-content/uploads/2022/08/iphone.svg" alt="">
      </div>
      <div class="story__logo">
        <img src="https://wordpress-113628-2820710.cloudwaysapps.com/wp-content/uploads/2022/09/Vector.svg" alt="">
      </div>
      <div class="story__title">
        <h3 class="white fw700 narrow">First comprehensive multibanking solution</h3>
      </div>
      <div class="story__text">
        <p class="white">Together with Valiant Bank, we were able to introduce the first comprehensive multibanking solution in Switzerland in September 2019. Since then, business customers of Valiant Bank have been able to aggregate all third-party bank accounts via a central financial cockpit and manage liquidity via a single bank account.</p>
      </div>
      <a href="/" class="btn btn--bordered btn--bordered--on-dark btn--bordered--arrowed btn--bordered--arrowed--on-dark">Learn more</a>
    </div>

    <div 
      class="story flex column jcfe" 
      style="background:linear-gradient(180deg, rgba(0, 41, 75, 0) 0%, rgba(0, 41, 75, 0.75) 100%), url(https://wordpress-113628-2820710.cloudwaysapps.com/wp-content/uploads/2022/09/placeholder-product-1024x571.png);background-size:cover;background-position:center;background-repeat:no-repeat;">
      <div class="story__button"></div>
      <div class="story__image story__image--wide">
        <img src="https://wordpress-113628-2820710.cloudwaysapps.com/wp-content/uploads/2022/09/laptop.png" alt="">
      </div>
      <div class="story__logo">
        <img src="https://wordpress-113628-2820710.cloudwaysapps.com/wp-content/uploads/2022/09/Vector.svg" alt="">
      </div>
      <div class="story__title">
        <h3 class="white fw700 narrow">First comprehensive multibanking solution</h3>
      </div>
      <div class="story__text">
        <p class="white">Together with Valiant Bank, we were able to introduce the first comprehensive multibanking solution in Switzerland in September 2019. Since then, business customers of Valiant Bank have been able to aggregate all third-party bank accounts via a central financial cockpit and manage liquidity via a single bank account.</p>
      </div>
    </div> --> 
    
  </div>
</section>  