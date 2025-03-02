$(document).ready(function() {

  // client logos infinite scroll
  if( $('.hero__slider').length > 0 ) {
    $('.hero__slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 0,
      speed: 6000, 
      pauseOnHover: false,
      cssEase: 'linear',
      arrows: false,
      variableWidth: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          },
        }
      ]
  
    })
  }
  // client logos infinite scroll

  // services block
  if( $('.services__wrapper').length > 0 ) {
    $('.services__wrapper').slick({
      slidesToShow: 3,
      slidesToScroll: 3,
      autoplay: false,
      dots: false,
      arrows: false,
      infinite: false,
      variableWidth: true,
      touchThreshold:100,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1, 
            dots: true,
          }
        },
        {
          breakpoint: 450,
          settings: {
            variableWidth: false,
            slidesToShow: 1,
            slidesToScroll: 1, 
            dots: true,
          }
        }
      ]
  
    });
  }
  // services block

  // testimonials block
  if( $('.testimonials__wrapper').length > 0 ) {
    $('.testimonials__wrapper').slick({
      autoplay: true,
      dots: true,
      autoplaySpeed: 10000, 
  
      touchThreshold:100,
      centerMode: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      cssEase: 'ease-out',
      variableWidth: true
    });
  }
  // testimonials block

  // image slider
  if( $('.image-slider__wrapper').length > 0 ) {
    $('.image-slider__wrapper').slick({
      autoplay: true,
      dots: false,
      autoplaySpeed: 10000, 
  
      touchThreshold:100,
      centerMode: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
  
      variableWidth: true
    });
  }
  // image slider

  // history slider
  let historySlider = $('.history-slider__wrapper');
  if( historySlider.length > 0 ) {
    historySlider.slick({
      autoplay: false,
      dots: true,
      autoplaySpeed: 10000, 
      touchThreshold:100, 
  
      centerMode: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      infinite: false,
      variableWidth: true,
      appendDots:$('.history-slider__dots'),
      customPaging: function (slider, i) {
        let year = $(slider.$slides[i]).data('year');
        return `<span data-dot-index="${i}">${year}</span>`;
      },
      responsive: [
        {
          breakpoint: 425,
          settings: {
            variableWidth: false
          },
        }
      ]
    });


    historySlider.on('beforeChange', function(event, slick, currentSlide, nextSlide){

      let slidesCount = 0;
      slick.$slides.each(function(){
        slidesCount++;
      });

      let trackPosition = ( 100 / (slidesCount - 1) ) * nextSlide;

      $('.history-slider__dots-track').css('width', `${trackPosition}%`);
      $('.slick-dots li').removeClass('slick-dot--dark');
      $(`[data-dot-index="${nextSlide}"]`).parent().prevAll().addClass('slick-dot--dark');

      if (window.matchMedia('(max-width: 768px)').matches) {
        $('.history-slider__dots').css('transform', `translateX(-${ (trackPosition / 2) }%)`);
        // console.log(currentSlide);
      }

    }); 
  }
  // history slider
  

  // articles slider
  if( $('.articles__wrapper--slider').length > 0 ) {
    $('.articles__wrapper--slider').slick({
      autoplay: false,
      dots: true,
      autoplaySpeed: 10000, 
  
      touchThreshold:100,
      cssEase: 'ease-out',
      centerMode: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      infinite: true,
      variableWidth: true,
      responsive: [
        {
          breakpoint: 425,
          settings: {
            slidesToShow: 1,
            variableWidth: false
          },
        }
      ]
    }); 

    $('.articles__wrapper--slider').on('setPosition', function (event, slick) {
      slick.$slides.css('height', slick.$slideTrack.height() + 'px'); 
    });
  }
  // articles slider  


}); 