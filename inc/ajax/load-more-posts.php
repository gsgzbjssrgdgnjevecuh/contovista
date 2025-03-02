<?php 

add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

function load_more_posts() {
  
  $paged = isset($_POST['paged']) ? $_POST['paged'] : 1;
    
  if($paged == 2) :
    $offset = 5;
  else : 
    $offset = 5 + (($paged - 2) * 3);
  endif;

  $args = array(  
    'post_type'       => 'post',
    'post_status'     => 'publish',
    'posts_per_page'  => '3', 
    'orderby'         => 'date', 
    'order'           => 'DESC',  
    'cat'             => $_POST['taxonomy'], 
    //'paged'           => $paged,
    'offset'          => $offset
  ); 

  $articles = new WP_Query( $args );

  ?>

<?php if( $articles->have_posts() ) : ?>
  <?php while ( $articles->have_posts() ) : $articles->the_post();  ?>
  
    <div 
      class="article article--normal column aic" 
      data-post-id="<?php echo get_the_ID(); ?>"> 

      <div 
        class="article__image" 
        style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
        
      <a href="<?php echo get_permalink(); ?>" class="article__info">
        <h3 class="fw700"><?php the_title(); ?></h3>
        <div class="article__data flex row aic">
          <span><?php echo get_the_date(); ?></span>
          <?php 
            $words = str_word_count( get_the_content() );
            $minute = floor( $words / 200 );
          ?>
          <span><?php echo $minute . ' min read' ; ?></span>
        </div>
        <p><?php echo get_the_excerpt(); ?></p>
        <div class="btn btn--arrowed"><?php echo __('Read article', 'contovista'); ?> </div>
      </a>
      
    </div>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
<?php endif; ?> 
<?php wp_die(); ?>
  

<?php 


}

 