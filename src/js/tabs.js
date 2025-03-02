$(document).ready(function() {

  //---------------------------------product tabs---------------------------------
  let bodyItemHeight = 100;
  $('.products-tabs__body-item').each(function(index, value) {

    if( $(this).outerHeight() > bodyItemHeight ) {
      bodyItemHeight = $(this).outerHeight();
    }
  });

  if (window.matchMedia('(max-width: 960px)').matches) {
    let bodyItemSubstractor = bodyItemHeight / 7;
    bodyItemHeight = bodyItemHeight - bodyItemSubstractor; 
  }

  $('.products-tabs__body').css('max-height', bodyItemHeight);

  $('.products-tabs__header-item').on('click', function() {
    $('.products-tabs__header-item').removeClass('products-tabs__header-item--active');
    $(this).addClass('products-tabs__header-item--active');

    let dataHeadTab = $(this).data('head-tab');
    let bodyItem = $(`[data-body-tab='${dataHeadTab}']`);

    $('.products-tabs__body-item').removeClass('products-tabs__body-item--active');
    bodyItem.addClass('products-tabs__body-item--active');

    $('.products-tabs--pagination-item').removeClass('products-tabs--pagination-item--active');
    $(`[data-paginator-index='${dataHeadTab}']`).addClass('products-tabs--pagination-item--active');

  });
  //---------------------------------product tabs---------------------------------

  //---------------------------------demo tabs---------------------------------
  // show descrtiption & image on load
  $('.demo__item--active').find('.demo__item-description').css('-webkit-line-clamp', 'unset');
  let onloadTabDescriptionHeight = $('.demo__item--active').find('.demo__item-description > p').height();
  $('.demo__item--active').find('.demo__item-description').css('max-height', onloadTabDescriptionHeight);

  if (window.matchMedia('(max-width: 900px)').matches) {
    let onloadTabImageHeight = $('.demo__item--active').find('.demo__item-image > img').height();
    $('.demo__item--active').find('.demo__item-image').css('max-height', onloadTabImageHeight);
  }
  // show descrtiption & image on load

  function nextTab(tab) {
    $('.demo__item').removeClass('demo__item--active');

    tab.addClass('demo__item--active');
    $('.demo__item').find('.demo__item-description').css({'max-height':'55px', '-webkit-line-clamp':'2'});

    if (window.matchMedia('(max-width: 900px)').matches) {
      let thisTabImageHeight = tab.find('.demo__item-image > img').height();
      
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


  /*---------------------------------scrollcopy---------------------------------*/
  // load height for scrollcopy content:
  if (window.matchMedia('(min-width: 1000px)').matches) {
    let activeScrollcopyContentItemHeight = $('.scrollcopy__content-item--active').height();
    $('.scrollcopy__content').height( activeScrollcopyContentItemHeight );
  

    $('.scrollcopy__stickybar-item').on('click', function() {
      let subtitleData = $(this).data('subtitle');
      let scrollcopyContentHeight = $(`[data-body-scrollcopy-content-item="${subtitleData}"]`).height();

      $('.scrollcopy__stickybar-item').removeClass('scrollcopy__stickybar-item--active');
      $(this).addClass('scrollcopy__stickybar-item--active');

      $('.scrollcopy__content-item').removeClass('scrollcopy__content-item--active');
      $(`[data-body-scrollcopy-content-item="${subtitleData}"]`).addClass('scrollcopy__content-item--active');
      $('.scrollcopy__content').height( scrollcopyContentHeight );
    });
  }
  if (window.matchMedia('(max-width: 1000px)').matches) {
    $('.scrollcopy__content-item-subtitle').on('click', function() {

      let thisParentHeight = 0;
      let thisParent = $(this).parent();
      thisParent.children().each(function() {
        thisParentHeight = thisParentHeight + $(this).outerHeight(true);
      });
      
      $('.scrollcopy__content-item-subtitle').removeClass('scrollcopy__content-item-subtitle--active');
      $(this).addClass('scrollcopy__content-item-subtitle--active'); 

      $('.scrollcopy__content-item').css('max-height', 30);
      $(this).parent('.scrollcopy__content-item').css('max-height', thisParentHeight);

      setTimeout(function() { 
        $('html, body').animate({
          scrollTop: thisParent.offset().top - 56
        }, 'fast');
      }, 200);

    });
  }
  /*---------------------------------scrollcopy---------------------------------*/
  
});