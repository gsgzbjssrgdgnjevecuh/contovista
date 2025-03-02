<?php
/**
 * Block Name: Breadcrumbs
 */

?>

<?php if(get_field( 'include_breadcrumbs' )) : ?>

<div class="breadcrumbs">
  <div class="container">
    <div class="breadcrumbs__wrapper flex row aic">
      <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    </div> 
  </div>
</div>

<?php endif; ?>
