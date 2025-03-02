<?php 

add_action('wp_ajax_load_more_team_members', 'load_more_team_members');
add_action('wp_ajax_nopriv_load_more_team_members', 'load_more_team_members');

function load_more_team_members() {
  $args = array(  
    'post_type'       => 'team-member',
    'post_status'     => 'publish',
    'posts_per_page'  => -1, 
    'orderby'         => 'title', 
    'order'           => 'ASC', 
  );

  $dataTeamTerm = $_POST['dataTeamTerm'];
  $team = new WP_Query( $args );

  ?>

<?php if( $team->have_posts() ) : ?>
<?php while ( $team->have_posts() ) : $team->the_post();  ?>

  <?php 
    // Get term name
    $teamTerms = get_the_terms( get_the_ID(), 'team-member' ); 
    foreach($teamTerms as $teamTerm) {
      $teamTermName =  $teamTerm->name; 
    }
  ?>

  <?php if( $teamTermName !== $dataTeamTerm ) : ?>
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
  <?php endif; ?>


<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?> 
<?php wp_die(); ?>
  

<?php 
}

