<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cv
 */ 

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Google Consent Mode -->
    <script data-cookieconsent="ignore">
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments)
      }
      gtag("consent", "default", {
        ad_storage: "denied",
        analytics_storage: "denied",
        functionality_storage: "denied",
        personalization_storage: "denied",
        security_storage: "granted",
        wait_for_update: 500
      });
      gtag("set", "ads_data_redaction", true);
    </script>
    <!-- End Google Consent Mode-->
    

    <!-- Google Tag Manager -->
    <script>
      if(navigator.userAgent.indexOf("Speed Insights") == -1 && navigator.userAgent.indexOf("Lighthouse") == -1) {
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-K37D7W7');
      }
    </script>
    <!-- End Google Tag Manager -->



    <!-- Cookiebot CMP-->
    <script
      id="Cookiebot"
      src="https://consent.cookiebot.com/uc.js"
      data-cbid="18d4f7f2-8d74-4b94-a9cd-6cf2a6c1555d"
      data-blockingmode="auto"
      type="text/javascript"
    ></script>
    <!-- End Cookiebot CMP -->

    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    
    <link rel="shortcut icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon">

    <?php wp_head(); ?>
    <!-- Get template url for JS  -->
    <script type="text/javascript">
      const templateUrl = '<?= get_bloginfo("template_url"); ?>';
    </script>
    <!-- Get template url for JS  -->
  </head>
  <body <?php body_class('cam'); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K37D7W7"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) --> 

    <header class="navigation">
      <div class="container flex row aic jcsb">
        <div class="navigation__top-right flex row aic">
          <a href="<?php echo get_field('link_to_we_are_hiring_page', 'option')['url']; ?>" class="fw700 white">
            <?php echo __('We are hiring', 'contovista'); ?>
          </a>
          <div class="language-switcher">
            <?php do_action('wpml_add_language_selector'); ?>
          </div>
        </div>
        <a href="<?php echo apply_filters( 'wpml_home_url', get_option( 'home' ) ); ?>" class="logo logo--header">
          <div class="logo--icon">
            <svg viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M31.0221 73.1112C11.1555 69.9112 -2.40009 51.1112 0.799913 31.2446C3.99991 11.3779 22.7999 -2.17768 42.6666 1.02233C43.2888 1.11121 43.911 1.24455 44.4888 1.37788L43.911 4.17788C43.3332 4.04455 42.7999 3.95566 42.2221 3.86677C23.911 0.888993 6.57769 13.4223 3.59991 31.7334C0.622135 50.0446 13.1555 67.3779 31.4666 70.3557C49.7777 73.3335 67.111 60.8001 70.0888 42.489C71.3333 34.889 69.911 27.0668 66.0888 20.4001L68.5777 18.9779C72.711 26.1779 74.2666 34.7112 72.9333 42.9334C69.6888 62.7557 50.9333 76.3557 31.0221 73.1112Z" fill="white"/>
              <path d="M22.4443 51.5113C14.4443 43.5558 14.4443 30.578 22.4443 22.6224C30.3999 14.6669 43.3777 14.6669 51.3332 22.6224L49.3332 24.6224C42.4443 17.778 31.2888 17.778 24.4443 24.6224C17.5999 31.4669 17.5999 42.6224 24.4443 49.4669C31.2888 56.3113 42.4443 56.3113 49.2888 49.4669C49.7777 48.978 50.2221 48.4446 50.6666 47.9113L52.8888 49.6891C52.3999 50.3113 51.8666 50.8891 51.2888 51.4669C43.3332 59.4669 30.3999 59.4669 22.4443 51.5113Z" fill="white"/>
              <path d="M61.7332 23.5113C56.4888 13.8224 46.3999 8.13353 35.3777 8.62241L35.511 11.4669C45.4221 11.0224 54.5332 16.1335 59.2443 24.8446C65.9999 37.2891 61.3777 52.8891 48.9332 59.6446C36.4888 66.4002 20.8888 61.778 14.1332 49.3335C9.24433 40.3113 10.3554 29.6891 16.0443 21.9113L13.5554 20.4446C7.37766 29.0669 6.22211 40.8002 11.5999 50.7557C19.111 64.578 36.4443 69.6891 50.2666 62.2224C64.0888 54.6669 69.2443 37.2891 61.7332 23.5113Z" fill="white"/>
            </svg>

          </div>
          <div class="logo--letters">
            <svg viewBox="0 0 74 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.9111 9.51122C2.7111 9.51122 1.77776 9.06678 1.15554 8.22234C0.577762 7.37789 0.311096 6.44456 0.311096 5.15568C0.311096 3.28901 0.844428 2.26678 1.59998 1.51123C2.26665 0.844563 3.02221 0.489014 3.9111 0.489014C4.97776 0.489014 5.64443 0.889009 6.26665 1.42234L5.5111 2.35568C4.88887 1.86679 4.53332 1.64456 3.86665 1.64456C3.19998 1.64456 2.57776 2.04456 2.26665 2.62234C1.95554 3.24456 1.77776 4.1779 1.77776 5.42234C1.77776 7.33345 2.53332 8.40011 3.9111 8.40011C4.62221 8.40011 5.24443 8.08901 5.73332 7.46678L6.48887 8.31122C5.73332 9.20011 4.97776 9.51122 3.9111 9.51122Z"/>
              <path d="M11.6 9.55569C9.2444 9.55569 7.91107 7.82236 7.91107 4.97791C7.91107 2.1779 9.28885 0.489014 11.5555 0.489014C12.9777 0.489014 13.9111 1.15568 14.4888 2.00012C15.0222 2.75568 15.2888 3.7779 15.2888 5.20013C15.2888 8.04458 13.7333 9.55569 11.6 9.55569ZM13.3333 2.71124C12.9777 1.95568 12.2222 1.60013 11.5111 1.60013C10.7555 1.60013 10.0444 1.95568 9.73329 2.53346C9.46663 3.06679 9.33329 3.7779 9.33329 4.75568C9.33329 5.95569 9.55551 7.02236 9.86662 7.55569C10.1777 8.08903 10.8444 8.40013 11.6 8.40013C12.4888 8.40013 13.1555 7.95569 13.4666 7.11125C13.6444 6.57791 13.7333 6.08902 13.7333 5.24458C13.7333 4.08902 13.6444 3.28902 13.3333 2.71124Z"/>
              <path d="M22.5777 9.33346V3.55567C22.5777 2.62233 22.4889 2.40011 22.2666 2.13344C22.0889 1.91122 21.7333 1.77788 21.3333 1.77788C20.6666 1.77788 19.6 2.31122 18.9777 2.97789V9.37791H17.6889V2.75566C17.6889 1.55566 17.3777 0.933439 17.3777 0.933439L18.6666 0.577881C18.6666 0.577881 18.9777 1.2001 18.9777 1.91122C19.8666 1.02233 20.7555 0.577881 21.6889 0.577881C22.6222 0.577881 23.4222 1.06677 23.7777 1.82233C23.9111 2.13344 24 2.489 24 2.80011V9.28901H22.5777V9.33346Z"/>
              <path d="M28.2666 0.533454H30.4889L30.0889 1.55568H28.2222V7.20013C28.2222 8.17791 28.4889 8.48903 29.3333 8.48903C29.7333 8.48903 29.9555 8.44458 30.1777 8.31125L30.3555 9.20014C29.9111 9.42236 29.4222 9.55569 28.8 9.55569C28.3555 9.55569 28 9.4668 27.6444 9.28903C27.0222 8.97791 26.8 8.44458 26.8 7.55569V1.51123H25.6444V0.489014H26.8"/>
              <path d="M35.1556 9.55569C32.8 9.55569 31.4667 7.82236 31.4667 4.97791C31.4667 2.1779 32.8445 0.489014 35.1111 0.489014C36.5334 0.489014 37.4667 1.15568 38.0445 2.00012C38.5778 2.75568 38.8445 3.7779 38.8445 5.20013C38.8445 8.04458 37.2889 9.55569 35.1556 9.55569ZM36.9334 2.71124C36.5778 1.95568 35.8222 1.60013 35.1111 1.60013C34.3556 1.60013 33.6445 1.95568 33.3333 2.53346C33.0667 3.06679 32.9333 3.7779 32.9333 4.75568C32.9333 5.95569 33.1556 7.02236 33.4667 7.55569C33.7778 8.08903 34.4445 8.40013 35.2 8.40013C36.0889 8.40013 36.7556 7.95569 37.0667 7.11125C37.2445 6.57791 37.3334 6.08902 37.3334 5.24458C37.2889 4.08902 37.2 3.28902 36.9334 2.71124Z"/>
              <path d="M44.2666 9.42232H42.9333L39.8666 0.844556L41.2444 0.533447L43.2444 6.44455C43.4666 7.15566 43.6444 7.91121 43.6444 7.91121H43.6889C43.6889 7.91121 43.8222 7.24455 44.0889 6.44455L46.0444 0.755669H47.4666L44.2666 9.42232Z"/>
              <path d="M49.2889 9.33344V0.800103L50.6667 0.577881V9.33344H49.2889Z"/>
              <path d="M55.9555 9.60013C54.8889 9.60013 53.6889 9.28901 52.8 8.75568L53.3333 7.7779C54.2222 8.31124 55.1111 8.5779 56.0444 8.5779C57.1111 8.5779 57.7778 8.00012 57.7778 7.11124C57.7778 6.35568 57.3333 5.91124 56.3555 5.68901L55.2889 5.46679C53.8667 5.15568 53.1111 4.31123 53.1111 3.11123C53.1111 1.55568 54.3555 0.489014 56.1778 0.489014C57.0666 0.489014 58.0889 0.755676 58.8 1.20012L58.3111 2.1779C57.5555 1.82234 56.9333 1.55568 56.1778 1.55568C55.2 1.55568 54.5778 2.13345 54.5778 2.9779C54.5778 3.64457 54.8889 4.04457 55.8222 4.22235L56.9778 4.44457C58.5333 4.75568 59.2444 5.55568 59.2444 6.84457C59.2 8.44457 57.8666 9.60013 55.9555 9.60013Z"/>
              <path d="M63.0666 0.755676H65.2L64.8 1.7779H63.0222V7.289C63.0222 8.22233 63.2889 8.57789 64.1333 8.57789C64.5333 8.57789 64.7555 8.53344 64.9778 8.40011L65.1555 9.24456C64.7111 9.46678 64.2222 9.60011 63.6444 9.60011C63.2 9.60011 62.8444 9.51122 62.5333 9.37789C61.9111 9.06678 61.6889 8.53345 61.6889 7.689V1.82235H60.5778V0.800123H61.6889"/>
              <path d="M72.9333 9.64456C72.3556 9.46678 71.9111 8.97789 71.7778 8.40012C70.9333 9.24456 70.2667 9.55567 69.2889 9.55567C67.1555 9.55567 66.5333 8.26678 66.5333 7.11123C66.5333 5.15567 68.2222 4.04456 71.0667 4.04456C71.4222 4.04456 71.6889 4.04456 71.6889 4.04456V3.42234C71.6889 2.66678 71.6444 2.35567 71.4222 2.089C71.1556 1.77789 70.8 1.64456 70.2667 1.64456C69.2889 1.64456 68.0889 2.17789 67.5111 2.66678L66.8444 1.68901C68 0.93345 69.2 0.533447 70.4444 0.533447C71.6444 0.533447 72.4444 0.977892 72.8 1.86678C72.9778 2.31123 73.0222 2.97789 72.9778 3.77789L72.8889 6.5779C72.8444 7.95567 72.9333 8.31123 73.5556 8.66678L72.9333 9.64456ZM70.9778 4.93345C68.8 4.93345 68.0444 5.689 68.0444 6.97789C68.0444 8.00012 68.5333 8.53345 69.5111 8.53345C70.4 8.53345 71.2 8.00012 71.6 7.20012L71.6444 4.97789C71.4222 4.97789 71.2444 4.93345 70.9778 4.93345Z">
            </svg>
          </div>
        </a>

        <div class="navigation__wrapper navigation__wrapper--hidden">
          <div class="navigation__menu">
            <div class="navigation__menu-wrapper flex row aic">
              <div class="navigation__menu-inner-wrapper">
                <?php
                  wp_nav_menu( [
                  'theme_location'  => 'primary',
                  'menu'            => 'Primary menu',
                  'container'       => false,
                  'menu_class'      => 'menu flex row aic jcsb',
                  'menu_id'         => false,
                  'echo'            => true,
                  'fallback_cb'     => 'wp_page_menu',
                  'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                  'link_before'     => '<span>',
                  'link_after'     => '</span>',
                  'add_li_class'    => 'menu__li'
                  ] );
                ?>
      
                <div class="language-switcher language-switcher--menu">
                  <?php do_action('wpml_add_language_selector'); ?>
                </div>

                <div class="language-switcher language-switcher--menu--mobile">
                  <?php do_action('wpml_add_language_selector'); ?>
                </div>
              </div>

              <?php 
                $modalScript = get_field( 'modal_script', 'option' );
                $modalOpener = $modalScript ? "modal-opener" : " " ;
              ?>
      
              <a 
                href="<?php the_field('header_button_link', 'option'); ?>" 
                class="btn btn--gradient <?php echo $modalOpener; ?>"
                data-modal="modal-header"> 
                <?php the_field('header_button_title', 'option'); ?>
                <span class="btn--gradient--span1"></span>
                <span class="btn--gradient--span2"></span>
              </a>  
            </div>
          </div>
        </div>

        <div class="burger">
          <div class="burger__line burger__line--top"></div>
          <div class="burger__line burger__line--middle"></div>
          <div class="burger__line burger__line--bottom"></div>
        </div>

      </div>
    </header>
    <?php if( $modalScript ) : ?>
      <div class="modal modal--closed contact-form flex aic jcc" id="modal-header">
        <div class="container">
          <div class="modal--close"></div>
          <?php echo $modalScript; ?>
        </div>
      </div>
    <?php endif; ?>

    <main> 
     