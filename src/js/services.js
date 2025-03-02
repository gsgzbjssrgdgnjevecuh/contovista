$(document).ready(function() {

  const serviceItem = $('.services__item ');

  let showServiceItems = function() {
    let windowCurrentTopPosition = $(window).scrollTop();
    let windowCurrentBottomPosition = windowCurrentTopPosition + window.innerHeight;
    let servicesSection = $('.services');
    let servicesOffsetTop = servicesSection.offset().top;
    let servisesOffsetBottom = servicesSection.outerHeight() + servicesOffsetTop;

    // console.log( 'Window top: ' + windowCurrentTopPosition );
    // console.log( 'Services bottom: ' + servisesOffsetBottom );
    // console.log( 'Window bottom: ' + windowCurrentBottomPosition );
    // console.log( 'Services top: ' + servicesOffsetTop );
    
    if (windowCurrentBottomPosition - 200 >= servicesOffsetTop ) {
      serviceItem.removeClass('services__item--hidden');
    }
  }

  showServiceItems();

  $(window).on('scroll', function () {
    showServiceItems();
  });

  
});