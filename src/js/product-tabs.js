$(document).ready(function () {

  //---------------------------------product tabs---------------------------------
  let bodyItemHeight = 100;

  function getHeightForMobileImage() {
    $('.products-tabs__body-item').each(function (index, value) {
      let infoHeight = $(this).children('.products-tabs__body-item-info').outerHeight();
      let imageHeight = $(this).children('.products-tabs__body-item-image').children('picture').children('img').outerHeight();
      bodyItemHeightCalculated = infoHeight + imageHeight;

      if (bodyItemHeightCalculated > bodyItemHeight) {
        bodyItemHeight = bodyItemHeightCalculated;
      }
    });
    let bodyItemSubstractor = bodyItemHeight / 7;
    bodyItemHeight = bodyItemHeight - bodyItemSubstractor;
    $('.products-tabs__body').css('max-height', bodyItemHeight);
  }

  if (window.matchMedia('(max-width: 960px)').matches) {

    setTimeout(function () { // set timeout for mobile to load correctly 
      getHeightForMobileImage();
    }, 1000);

    // fixing the image height because of this terrible lazy load plugin that client wants by some strange reason
    $(window).on('scroll', function () {
      if ($('.products-tabs').length > 0) {

        let windowTop = $(window).scrollTop();
        let windowBottom = windowTop + $(window).height();
        let productsSectionTop = $('.products-tabs').offset().top;

        if (windowBottom + 300 > productsSectionTop) {

          getHeightForMobileImage();

          console.log('Got it');

          return;
        }

      }
    });
    // fixing the image height because of this terrible lazy load plugin that client wants by some strange reason

  } else {

    $('.products-tabs__body-item').each(function (index, value) {
      if ($(this).outerHeight() > bodyItemHeight) {
        bodyItemHeight = $(this).outerHeight();
      }
    });
    $('.products-tabs__body').css('max-height', bodyItemHeight);

  }


  $('.products-tabs__header-item').on('click', function () {
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


}); 