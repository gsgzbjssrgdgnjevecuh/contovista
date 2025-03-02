$(document).ready(function() {

  // hide modal
  $('.modal--close').on('click', function() {
    $('.modal').addClass('modal--closed');
  });
  $(document).on('click', function (e) {
    let newsletterFooterBtn = $('.show-newsletter-footer');
    let newsletterBtn = $('.show-newsletter');
    let downladNewspaeprBtn = $('.show-download-newspaper');

    let modalOpenerButton = $('.modal-opener');

    if ( 
      $(e.target).closest("form").length === 0 
      && $(e.target).closest(newsletterFooterBtn).length === 0 
      && $(e.target).closest(newsletterBtn).length === 0 
      && $(e.target).closest(downladNewspaeprBtn).length === 0 

      && $(e.target).closest(modalOpenerButton).length === 0 
      )  {
      $('.modal').addClass('modal--closed');
    }
  });
  // hide modal

  $('.modal-opener').on('click', function(e) {
    e.preventDefault();
    let modalId = $(this).data('modal');
    $(`#${modalId}`).removeClass('modal--closed');
  })

  $('.show-newsletter-footer').on('click', function(e) {
    e.preventDefault();
    $('.modal--newsletter-footer').removeClass('modal--closed');
  });
  $('.show-newsletter').on('click', function(e) {
    e.preventDefault();
    $('.modal--newsletter').removeClass('modal--closed');
  });
  $('.show-download-newspaper').on('click', function(e) {
    e.preventDefault();
    $('.modal--download-whitepaper').removeClass('modal--closed');
  });

}); // jQuery ends here   