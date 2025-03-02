<?php
/**
 * Block Name: Team card
 */
$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';

?>

<section class="team-card section logo-color logo-color-dark" <?php echo $sectionId; ?> >
  <div class="container">
    <h2><?php echo the_field('section_title'); ?></h2>

    <?php $teamTaxonomy = get_field('choose_the_category_to_be_shown_for_team_members_block'); ?>
    <div  
      class="team-card__wrapper flex row fww jcsb aic" 
      data-team-term="<?php echo $teamTaxonomy->name; ?>">  

      <?php  
        $args = array(  
          'post_type'       => 'team-member',
          'post_status'     => 'publish',
          'posts_per_page'  => -1, 
          'orderby'         => 'title', 
          'order'           => 'ASC', 
          'tax_query' => array(
            array(
              'taxonomy' => 'team-member',
              'field' => 'slug',
              'terms' => $teamTaxonomy 
            )
          )
        );

        $team = new WP_Query( $args );
      ?>

      <?php if( $team->have_posts() ) : ?>
        <?php while ( $team->have_posts() ) : $team->the_post();  ?>

        <div class="team-card__card">
          <div class="team-card__card-photo">
            <img 
              src="<?php echo esc_attr( get_field( 'photo', get_the_ID() )['sizes']['circle-thumb'] );  ?>"  
              alt="<?php echo esc_attr( get_field( 'photo', get_the_ID() )['alt'] ); ?>"
              caption="<?php echo esc_attr( get_field( 'photo', get_the_ID() )['caption'] ); ?>"
              description="<?php echo esc_attr( get_field( 'photo', get_the_ID() )['description'] ); ?>">
          </div>
          <a href="mailto:<?php echo get_field( 'email',get_the_ID() ); ?>" class="team-card__card-mail">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="2.5" y="5.5" width="19" height="14.5" stroke="#00294B" stroke-width="2"/>
              <path d="M3 6L12 12.75L21 6" stroke="#00294B" stroke-width="2"/>
            </svg>
          </a>
          <div class="team-card__card-name"><?php the_title(); ?></div>
          <div class="team-card__card-position fw700"><?php echo the_field( 'position', get_the_ID() ); ?></div>
        </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?> 

    </div>
    <a 
        href="/" 
        class="btn btn--bordered btn--bordered--plus load-more-team-members">
        <?php echo __('Show more team members', 'contovista'); ?>
      </a>
  </div>
</section> 

 