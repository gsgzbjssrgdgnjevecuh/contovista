$(document).ready(function() {

  //---------------------------------demo tabs---------------------------------
  // show descrtiption & image on load
  $('.demo__item--active').find('.demo__item-description').css('-webkit-line-clamp', 'unset');
  let onloadTabDescriptionHeight = $('.demo__item--active').find('.demo__item-description > p').height();
  $('.demo__item--active').find('.demo__item-description').css('max-height', onloadTabDescriptionHeight);

  if (window.matchMedia('(max-width: 900px)').matches) { 
    setTimeout( function() { // set timeout for mobile to load correctly 
      let onloadTabImageHeight = $('.demo__item--active').find('.demo__item-image > picture > img').height();
      $('.demo__item--active').find('.demo__item-image').css('max-height', onloadTabImageHeight);
    },1000);
    
    // fixing the image height because of this terrible lazy load plugin that client wants by some strange reason
    $(window).on('scroll', function () {
      let windowTop = $(window).scrollTop();
      let windowBottom = windowTop + $(window).height();
      let demoSectionTop = $('.demo').offset().top;
      
      if( windowBottom + 300 > demoSectionTop ) {
     
        let onloadTabImageHeight = $('.demo__item--active').find('.demo__item-image > picture > img').height();
        $('.demo__item--active').find('.demo__item-image').css('max-height', onloadTabImageHeight);
        
        return;
      }
    });
    // fixing the image height because of this terrible lazy load plugin that client wants by some strange reason
  }
  // show descrtiption & image on load

  function nextTab(tab) {
    $('.demo__item').removeClass('demo__item--active');

    tab.addClass('demo__item--active');
    $('.demo__item').find('.demo__item-description').css({'max-height':'55px', '-webkit-line-clamp':'2'});

    if (window.matchMedia('(max-width: 900px)').matches) {
      let thisTabImageHeight = tab.find('.demo__item-image > picture > img').height();
      
      $('.demo__item').find('.demo__item-image').css('max-height', 0);
      $('.demo__item').find('.demo__item-description').css('max-height', 0);
      tab.find('.demo__item-image').css('max-height', thisTabImageHeight);
    }

    tab.find('.demo__item-description').css('-webkit-line-clamp', 'unset');
    let thisTabDescriptionHeight = tab.find('.demo__item-description > p').height();
    tab.find('.demo__item-description').css('max-height', thisTabDescriptionHeight);
  };

  // next tab animation
  let tabInterval;
  function tabTimer() {
    tabInterval = setInterval(function () {
      if( $('.demo__item--active').next().length > 0 ) {
        let activeTabData = $('.demo__item--active').data('demo-item');
        
        $('.demo__item').removeClass('demo__item--active');
        activeTabData++;

        $(`[data-demo-item="${activeTabData}"]`).addClass('demo__item--active');
        $(`[data-demo-item="${activeTabData}"]`).find('.demo__item-description > p').height();
        $('.demo__item').find('.demo__item-description').css( {'max-height':'55px', '-webkit-line-clamp':'2'} );

        $(`[data-demo-item="${activeTabData}"]`).find('.demo__item-description').css('-webkit-line-clamp', 'unset');
        let thisTabDescriptionHeight = $(`[data-demo-item="${activeTabData}"]`).find('.demo__item-description > p').height();
        $(`[data-demo-item="${activeTabData}"]`).find('.demo__item-description').css('max-height', thisTabDescriptionHeight);
      } else {
        $('.demo__item').removeClass('demo__item--active');
        $(`[data-demo-item="1"]`).addClass('demo__item--active');
        
        $(`[data-demo-item="1"]`).find('.demo__item-description > p').height();
        $('.demo__item').find('.demo__item-description').css('max-height', '55px');

        let thisTabDescriptionHeight = $(`[data-demo-item="1"]`).find('.demo__item-description > p').height();
        $(`[data-demo-item="1"]`).find('.demo__item-description').css('max-height', thisTabDescriptionHeight);
      }
    }, 10000);
  } // tabTimer


  if (window.matchMedia('(min-width: 900px)').matches) {
    tabTimer();
  }
  // next tab animation

  $('.demo__item').on('click',function() {
    let thisTab = $(this);
    nextTab(thisTab);
    
    if (window.matchMedia('(max-width: 900px)').matches) {
      setTimeout(function() { 
        $('html, body').animate({
          scrollTop: thisTab.offset().top - 56
        }, 400); 
      }, 500);
    }

    if (window.matchMedia('(min-width: 900px)').matches) {
      clearInterval(tabInterval);
      tabTimer();
    }

  });
  //---------------------------------demo tabs---------------------------------

  
});