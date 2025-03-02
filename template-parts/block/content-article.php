<?php
/**
 * Block Name: Article
 */

 $sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';
 
?>
 
<section class="section articles logo-color logo-color-dark" <?php echo $sectionId; ?> > 
  <div class="container">
    <h2>  
      <?php echo the_field('section_title'); ?>
    </h2>

    <?php $slider = ( get_field('slider_load_more') ) ? 'articles__wrapper--slider' : 'articles__wrapper--load-more'; ?>
    <?php $articleTaxonomy = get_field('choose_articles_category_to_show'); ?>

    <?php 
      global $post;
      if( ( get_field('slider_load_more') ) ) {
        $excludedPost = array( $post->ID );
      }
    ?>


    <div 
      class="articles__wrapper <?php echo $slider; ?> flex row fww" 
      data-taxonomy="<?php echo $articleTaxonomy; ?>">

      <?php  
        $postCount = ( get_field('slider_load_more') ) ? -1 : 5;
        $args = array(  
          'post_type'       => 'post',
          'post_status'     => 'publish',
          'post__not_in'    => $excludedPost,
          'posts_per_page'  => $postCount, 
          'orderby'         => 'date', 
          'order'           => 'DESC', 
          'cat'             => $articleTaxonomy 
        );

        $articles = new WP_Query( $args ); 

         
        $articlesIndex = 1;
      ?>

      <?php if( $articles->have_posts() ) : ?>
        <?php while ( $articles->have_posts() ) : $articles->the_post();  ?>

  
            <?php $articleWide = ( !get_field('make_first_post_wider') ) ? 'article--wide' : 'article--normal'; ?>
        
          <?php $articleWidth = ( 1 == $articlesIndex ) ? $articleWide : 'article--normal'; ?>

          <div 
            class="article <?php echo $articleWidth; ?> column aic" 
            data-post-id="<?php echo get_the_ID(); ?>"> 
            <div  
              class="article__image" 
              style="background-image:url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'article' ); ?>)">
            </div>
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

          <?php $articlesIndex++; ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?> 

    </div>

    <?php if( !get_field('slider_load_more') ) : ?>

      <?php 
        $categoryName = get_the_category_by_ID( get_field('choose_articles_category_to_show') );
        $categoryId = get_cat_ID( $categoryName );
        $categoryLink = get_category_link( $categoryId );
      ?>
      
      <?php if( $articles->found_posts > 5 ) : ?>
        <a 
          href="/" 
          class="btn btn--bordered btn--bordered--plus load-more-articles">
          <?php echo __('Show more articles', 'contovista'); ?>
        </a>
      <?php endif; ?>

    <?php endif; ?>  
   
    
  </div>
</section> 