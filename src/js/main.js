$(document).ready(function() {
  
  //----------------------------back to top button-------------------------------
  $('.back-to-top').on('click', function() {
    $("html, body").animate({ scrollTop: 0 });
    return false;
  });
    //show button
  $(document).on('scroll', function() {
    let offset = $(this).scrollTop();
    
    if( offset >= 200 ) {
      $('.back-to-top').removeClass('back-to-top--hidden');
    } else {
      $('.back-to-top').addClass('back-to-top--hidden');
    }
  });
  //----------------------------back to top button-------------------------------

  //------------------------------navigation scroll------------------------------
  if($(window).scrollTop() > 20) {
    $('.navigation').addClass('navigation--scrolled');
  }
  $(window).on('scroll', function() {
    if($(window).scrollTop() > 20) {
      $('.navigation').addClass('navigation--scrolled');
    } else {
      $('.navigation').removeClass('navigation--scrolled'); 
    }
  });
  //------------------------------navigation scroll------------------------------ 


  // ------------------------logo letters color animation-------------------------
  $(window).on('scroll', function() {

    let heroHeight = $('.hero').outerHeight();
    let logo = $('.logo--letters');

    let logoOffsetTop = logo.offset().top;
    let logoOffsetBottom = logoOffsetTop + logo.outerHeight();

    $('.logo-color').each(function(key, value){

      let currentSection = $(this); 
      let sectionOffsetTop = currentSection.offset().top;
      let sectionOffsetBottom = sectionOffsetTop + currentSection.outerHeight();

      if ( logoOffsetTop >= sectionOffsetTop  && logoOffsetBottom <=sectionOffsetBottom ) {
        if( currentSection.hasClass('logo-color-white') ) {
          logo.removeClass('logo--letters--dark');
        } else {
          logo.addClass('logo--letters--dark');
        }
      }

    });//end each 

  }) 
  // ------------------------logo letters color animation-------------------------


  // ------------------------remove classes from menu on homepage-------------------------
  if( $('body').hasClass('home') ) {
    $('li').removeClass('current-menu-ancestor');
    $('li').removeClass('current-menu-item');
  };
  // ------------------------remove classes from menu on homepage-------------------------
  

  //-----------------------------languages flag hover-----------------------------
  if (window.matchMedia('(min-width: 1230px)').matches) {
    $('.language-switcher div ul li').on('mouseover', function() {
      $('.language-switcher div ul li').css('opacity', 0.5);
      $(this).css('opacity', 1);
    })
    $('.language-switcher div ul li').on('mouseleave', function() {
      $('.language-switcher div ul li').css('opacity', 1);
    })
  }
  //-----------------------------languages flag hover-----------------------------

  //-----------------------------------burger-------------------------------------
  $('.burger').on('click', function() {
    $(this).toggleClass('burger--toggled'); 
    $('.navigation__wrapper').toggleClass('navigation__wrapper--hidden');
    // $('.menu-item-has-children').removeClass('menu-item-has-children--opened');
  });
  //-----------------------------------burger-------------------------------------

   
  if (window.matchMedia('(max-width: 1230px)').matches) {
    // Open parent items whent on subpage
    $('.current_page_item').parents('li').addClass('menu-item-has-children--opened'); 
    // Open parent items whent on subpage
    //Toggle items inside mobile menu
    $('li.menu-item-has-children > a').on('click', function(e) {
      e.preventDefault();
      let thisParent = $(this).parent('.menu-item-has-children');
  
      thisParent.toggleClass('menu-item-has-children--opened');
    })
    //Toggle items inside mobile menu

    // Language switcher
    $('.wpml-ls-current-language a').on('click', function(e) {
      e.preventDefault();
      $('.language-switcher--menu--mobile').toggleClass('language-switcher--menu--mobile-opened');
    })
    // Language switcher

    // Click outside
    $(document).click(function(e) { 
      if ( $(e.target).closest('.navigation__wrapper').length === 0 && $(e.target).closest('.burger').length === 0 ) {
        $('.burger').removeClass('burger--toggled'); 
        $('.navigation__wrapper').addClass('navigation__wrapper--hidden');
      } 
      if ( $(e.target).closest('.wpml-ls-current-language a').length === 0 ) {
        $('.language-switcher--menu--mobile').removeClass('language-switcher--menu--mobile-opened');
      } 
    });
    // Click outside
  }


  // _______________________Story________________________
  if( $('.story') ) {
    if (window.matchMedia('(min-width: 769px)').matches) {
      $('.story')
        .mouseenter(function() {
          let storyTextHeight = $(this).find('.story__text p').outerHeight();
          $(this).find('.story__text').css('max-height', storyTextHeight);
        })
        .mouseleave(function() {
          $(this).find('.story__text').css('max-height', 0);
        })
    }
    
    if (window.matchMedia('(max-width: 768px)').matches) {
      $('.story__button')
        .mouseenter(function() {
          let thisParent = $(this).parent('.story');
          let storyTextHeight = thisParent.find('.story__text p').outerHeight();

          $(this).css('transform', 'rotate(45deg)')
          thisParent.find('.story__text').css('max-height', storyTextHeight);
          $(this).parent('.story').find('.story__title').css('max-height', 0)
          thisParent.addClass('story--hovered');
        })
        .mouseleave(function() {
          let titleHeight = $(this).parent('.story').find('.story__title h3').outerHeight();

          console.log(titleHeight);

          $(this).css('transform', 'rotate(0)');
          $(this).parent('.story').find('.story__title').css('max-height', titleHeight)
          $(this).parent('.story').find('.story__text').css('max-height', 0);
          $(this).parent('.story').removeClass('story--hovered');
        })
    }
  }
  // _______________________Story________________________


 // jQuery ends here  
});  


   