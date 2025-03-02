$(document).ready(function() {

  /*---------------------------------scrollcopy---------------------------------*/
  // load height for scrollcopy content:
  if (window.matchMedia('(min-width: 1000px)').matches && $('.scrollcopy__stickybar').length > 0 ) {
    // click event
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

    // let stickyBarHeight = $('.scrollcopy__stickybar').outerHeight();
    // $('.scrollcopy__content-item').each(function() {
    //   $(this).css( 'min-height', stickyBarHeight );
    // })


    // $('.scrollcopy__stickybar-item').on('click', function() {
    //   let subtitleData = $(this).data('subtitle');

    //   $('.scrollcopy__stickybar-item').removeClass('scrollcopy__stickybar-item--active');
    //   $(this).addClass('scrollcopy__stickybar-item--active');

    //   $('html, body').animate({
    //     scrollTop: $(`[data-body-scrollcopy-content-item='${subtitleData}']`).offset().top - 170
    //   }, 300); 
     
    // });
    // click event


    // scroll event
    // $(window).on('scroll', function() {

    //   let stickyBar = $('.scrollcopy__stickybar'),
    //       stickyBarOffsetTop = stickyBar.offset().top,
    //       stickyBarOffsetBottom = stickyBarOffsetTop + stickyBar.outerHeight();

    //   $('.scrollcopy__content-item').each(function() {
    //     let currentItem = $(this),
    //         currentDataBodyScrollcopyContentItem = currentItem.data('body-scrollcopy-content-item'),
    //         currentItemOffsetTop = currentItem.offset().top;

    //     if( currentItemOffsetTop <= stickyBarOffsetBottom && currentItemOffsetTop >= stickyBarOffsetTop ) {
    //       $('.scrollcopy__stickybar-item').removeClass('scrollcopy__stickybar-item--active');
    //       $(`[data-subtitle='${currentDataBodyScrollcopyContentItem}']`).addClass('scrollcopy__stickybar-item--active');
    //     }     
        
    //   })
  
    // }) 
    // scroll event
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