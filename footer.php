<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cv
 */

$newsletter = get_field( 'include_newsletter_section_to_this_page', get_queried_object_id() );
?>

</main>

<?php if( !$newsletter ) : ?>
  <footer class="footer">
    <div class="container flex row"> 

      <a href="<?php echo apply_filters( 'wpml_home_url', get_option( 'home' ) ); ?>" class="logo logo--footer">
        <img 
          src="<?php echo esc_attr( get_field( 'logo_footer', 'option' )['url'] );  ?>" 
          alt="<?php echo esc_attr( get_field( 'logo_footer', 'option' )['alt'] ); ?>"
          caption="<?php echo esc_attr( get_field( 'logo_footer', 'option' )['caption'] ); ?>"
          description="<?php echo esc_attr( get_field( 'logo_footer', 'option' )['description'] ); ?>">
      </a>
      <div class="footer__wrapper footer__contact-us">
        <h2 class="white"><?php the_field('footer_title', 'option'); ?></h2>
        <a href="mailto:<?php the_field('email', 'option'); ?>" class="teal"><?php the_field('email', 'option'); ?></a>
        <button class="btn show-newsletter-footer"><?php the_field('newsletter_button_text', 'option'); ?></button> 
      </div>
      <div class="footer__wrapper footer__info">
        <span class="white"><?php the_field('brand_name', 'option'); ?></span>

        <a 
          class="white" 
          href="<?php the_field('link_to_google_maps', 'option'); ?>" 
          target="_blank">
          <?php the_field('address', 'option'); ?>
          <br>
          <?php the_field('zip_code', 'option'); ?>
        </a>
        <a class="white" href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
      </div>
      <div class="footer__wrapper footer__social"> 
        <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank">
          <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0005 10.4639H15.3335V12.6222C15.9577 11.3809 17.5583 10.2655 19.9628 10.2655C24.5723 10.2655 25.6667 12.7365 25.6667 17.2702V25.6667H21V18.3027C21 15.7209 20.3758 14.2649 18.7868 14.2649C16.583 14.2649 15.6672 15.834 15.6672 18.3015V25.6667H11.0005V10.4639ZM2.99834 25.4684H7.66501V10.2655H2.99834V25.4684ZM8.33351 5.30837C8.33368 5.69953 8.25611 6.08681 8.1053 6.44773C7.95448 6.80864 7.73344 7.13597 7.45501 7.41071C6.89081 7.97144 6.12712 8.2853 5.33168 8.28337C4.53763 8.28284 3.77571 7.96977 3.21068 7.41187C2.93326 7.13621 2.71296 6.8085 2.56241 6.44754C2.41186 6.08659 2.33402 5.69947 2.33334 5.30837C2.33334 4.51854 2.64834 3.76254 3.21184 3.20487C3.77638 2.64623 4.53862 2.33302 5.33284 2.33337C6.12851 2.33337 6.89151 2.64721 7.45501 3.20487C8.01734 3.76254 8.33351 4.51854 8.33351 5.30837Z"/>
          </svg>
        </a>
        <a href="<?php the_field('twitter', 'option'); ?>" target="_blank">
          <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M27.5835 5.75976C26.6093 6.19143 25.5628 6.48309 24.4627 6.61493C25.5978 5.93568 26.4471 4.86664 26.852 3.60726C25.7855 4.24075 24.6182 4.68665 23.401 4.92559C22.5824 4.0516 21.4982 3.47231 20.3167 3.27765C19.1352 3.08299 17.9225 3.28385 16.8668 3.84906C15.8111 4.41426 14.9716 5.31218 14.4785 6.40341C13.9855 7.49465 13.8665 8.71814 14.14 9.88393C11.979 9.77542 9.8649 9.21374 7.935 8.23532C6.00509 7.2569 4.30248 5.88362 2.93767 4.20459C2.471 5.00959 2.20267 5.94293 2.20267 6.93693C2.20215 7.83176 2.42251 8.71288 2.8442 9.50212C3.26588 10.2914 3.87586 10.9643 4.62 11.4613C3.75699 11.4338 2.91302 11.2006 2.15834 10.7811V10.8511C2.15825 12.1061 2.59238 13.3225 3.38705 14.2939C4.18173 15.2653 5.288 15.9318 6.51817 16.1804C5.71758 16.3971 4.87823 16.429 4.0635 16.2738C4.41058 17.3536 5.08667 18.298 5.9971 18.9745C6.90753 19.6511 8.00674 20.026 9.14084 20.0468C7.21564 21.5581 4.83804 22.3779 2.3905 22.3743C1.95695 22.3744 1.52376 22.3491 1.09317 22.2984C3.57756 23.8958 6.46957 24.7436 9.42317 24.7403C19.4215 24.7403 24.8873 16.4593 24.8873 9.27726C24.8873 9.04393 24.8815 8.80826 24.871 8.57493C25.9342 7.80606 26.8519 6.85397 27.5812 5.76326L27.5835 5.75976Z"/>
          </svg>
        </a>
      </div> 

    </div>
    <div class="container">
      <div class="footer__bottom flex row aic jcsb">
        <span class="dark-sky-80">© <?php bloginfo( 'name' ); ?> <?php echo  date('Y'); ?></span>
        <div class="footer__bottom-wrapper flex row">
          <?php
            wp_nav_menu( [
            'theme_location'  => 'secondary',
            'menu'            => 'Secondary menu',
            'container'       => false,
            'menu_class'      => 'footer__menu flex row aic jcsb',
            'menu_id'         => false,
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
            'add_li_class'    => 'menu__li'
            ] );
          ?>
        </div>
      </div>
    </div>
  </footer>
<?php elseif( $newsletter ) : ?>
  <section class="newsletter newsletter--footer flex row jcsb">
    <div class="newsletter__wrapper">
      <h2 class="white"><?php the_field('newsletter_title', 'option'); ?></h2>
      <p class="white"><?php the_field('newsletter_text', 'option'); ?></p>
      <button class="btn show-newsletter-footer">
        <?php the_field('newsletter_button_text', 'option'); ?>
      </button>  
    </div>
    <div class="newsletter__image">
      <img 
        src="<?php echo esc_attr( get_field( 'newsletter_image', 'option' )['url'] );  ?>" 
        alt="<?php echo esc_attr( get_field( 'newsletter_image', 'option' )['alt'] ); ?>"
        caption="<?php echo esc_attr( get_field( 'newsletter_image', 'option' )['caption'] ); ?>"
        description="<?php echo esc_attr( get_field( 'newsletter_image', 'option' )['description'] ); ?>">
    </div>
  </section>
  
  <footer class="footer footer--with-newsletter-section">
    <div class="container flex row">
  
      <a href="<?php echo apply_filters( 'wpml_home_url', get_option( 'home' ) ); ?>" class="logo logo--footer">
        <img 
          src="<?php echo esc_attr( get_field( 'logo_footer', 'option' )['url'] );  ?>" 
          alt="<?php echo esc_attr( get_field( 'logo_footer', 'option' )['alt'] ); ?>"
          caption="<?php echo esc_attr( get_field( 'logo_footer', 'option' )['caption'] ); ?>"
          description="<?php echo esc_attr( get_field( 'logo_footer', 'option' )['description'] ); ?>">
      </a>
      <div class="footer__wrapper footer__contact-us">
        <h2 class="white"><?php the_field('footer_title', 'option'); ?></h2>
        <a href="mailto:<?php the_field('email', 'option'); ?>" class="teal"><?php the_field('email', 'option'); ?></a>
      </div>
      <div class="footer__wrapper footer__info">
        <span class="white"><?php the_field('brand_name', 'option'); ?></span>
  
        <a 
          class="white" 
          href="<?php the_field('link_to_google_maps', 'option'); ?>" 
          target="_blank">
          <?php the_field('address', 'option'); ?>
          <br>
          <?php the_field('zip_code', 'option'); ?>
        </a>
        <a class="white" href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
      </div>
      <div class="footer__wrapper footer__social"> 
        <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank">
          <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0005 10.4639H15.3335V12.6222C15.9577 11.3809 17.5583 10.2655 19.9628 10.2655C24.5723 10.2655 25.6667 12.7365 25.6667 17.2702V25.6667H21V18.3027C21 15.7209 20.3758 14.2649 18.7868 14.2649C16.583 14.2649 15.6672 15.834 15.6672 18.3015V25.6667H11.0005V10.4639ZM2.99834 25.4684H7.66501V10.2655H2.99834V25.4684ZM8.33351 5.30837C8.33368 5.69953 8.25611 6.08681 8.1053 6.44773C7.95448 6.80864 7.73344 7.13597 7.45501 7.41071C6.89081 7.97144 6.12712 8.2853 5.33168 8.28337C4.53763 8.28284 3.77571 7.96977 3.21068 7.41187C2.93326 7.13621 2.71296 6.8085 2.56241 6.44754C2.41186 6.08659 2.33402 5.69947 2.33334 5.30837C2.33334 4.51854 2.64834 3.76254 3.21184 3.20487C3.77638 2.64623 4.53862 2.33302 5.33284 2.33337C6.12851 2.33337 6.89151 2.64721 7.45501 3.20487C8.01734 3.76254 8.33351 4.51854 8.33351 5.30837Z"/>
          </svg>
        </a>
        <a href="<?php the_field('twitter', 'option'); ?>" target="_blank">
          <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M27.5835 5.75976C26.6093 6.19143 25.5628 6.48309 24.4627 6.61493C25.5978 5.93568 26.4471 4.86664 26.852 3.60726C25.7855 4.24075 24.6182 4.68665 23.401 4.92559C22.5824 4.0516 21.4982 3.47231 20.3167 3.27765C19.1352 3.08299 17.9225 3.28385 16.8668 3.84906C15.8111 4.41426 14.9716 5.31218 14.4785 6.40341C13.9855 7.49465 13.8665 8.71814 14.14 9.88393C11.979 9.77542 9.8649 9.21374 7.935 8.23532C6.00509 7.2569 4.30248 5.88362 2.93767 4.20459C2.471 5.00959 2.20267 5.94293 2.20267 6.93693C2.20215 7.83176 2.42251 8.71288 2.8442 9.50212C3.26588 10.2914 3.87586 10.9643 4.62 11.4613C3.75699 11.4338 2.91302 11.2006 2.15834 10.7811V10.8511C2.15825 12.1061 2.59238 13.3225 3.38705 14.2939C4.18173 15.2653 5.288 15.9318 6.51817 16.1804C5.71758 16.3971 4.87823 16.429 4.0635 16.2738C4.41058 17.3536 5.08667 18.298 5.9971 18.9745C6.90753 19.6511 8.00674 20.026 9.14084 20.0468C7.21564 21.5581 4.83804 22.3779 2.3905 22.3743C1.95695 22.3744 1.52376 22.3491 1.09317 22.2984C3.57756 23.8958 6.46957 24.7436 9.42317 24.7403C19.4215 24.7403 24.8873 16.4593 24.8873 9.27726C24.8873 9.04393 24.8815 8.80826 24.871 8.57493C25.9342 7.80606 26.8519 6.85397 27.5812 5.76326L27.5835 5.75976Z"/>
          </svg>
        </a>
      </div>
  
    </div>
    <div class="container">
      <div class="footer__bottom flex row aic jcsb">
        <span class="dark-sky-80">© <?php bloginfo( 'name' ); ?> <?php echo  date('Y'); ?></span>
				<?php if ( has_nav_menu( 'secondary' ) ) : ?>
        <div class="footer__bottom-wrapper flex row">
          <?php
            wp_nav_menu( [
            'theme_location'  => 'secondary',
            'menu'            => 'Secondary menu',
            'container'       => false,
            'menu_class'      => 'footer__menu flex row aic jcsb',
            'menu_id'         => false,
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
            'add_li_class'    => 'menu__li'
            ] );
          ?>
        </div>
				<?php endif; ?>
      </div>
    </div>
  </footer>
<?php endif; ?>
  

<div class="back-to-top back-to-top--hidden flex aic jcc">
  <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M4.00002 10.2782L8.2782 6.00005L12.5564 10.2782" stroke-width="2"/>
  </svg>
</div>

<div class="modal modal--closed modal--newsletter-footer contact-form flex aic jcc">
  <div class="container">
    <div class="modal--close"></div>
    <?php the_field('form_script', 'option'); ?>
  </div>
</div>


<?php wp_footer(); ?>
<?php if ( has_block( 'map' ) ) : ?> 

  
  <?php endif; ?>

  
</body>
</html>  