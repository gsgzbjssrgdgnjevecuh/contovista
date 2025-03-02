$(document).ready(function() {
  
  function countUp() {
    if( $('.columns').length ) {

      let a = 0;
      let numItem = $('.columns__column-title-number');
      let oTop = $(".columns").offset().top - window.innerHeight;

      if (a == 0 && $(window).scrollTop() > oTop) {
        numItem.each(function () {
          let $this = $(this),
              countTo = $this.attr("data-number");
          $({
              countNum: $this.text()
          }).animate(
            {
              countNum: countTo
            },
  
            {
              duration: 2000,
              easing: "swing",
              step: function () {
                $this.text(
                  Math.ceil(this.countNum).toLocaleString("en")
                );
              },
              complete: function () {
                $this.text(
                  Math.ceil(this.countNum).toLocaleString("en")
                );
              }
            }
          );
        });
        a = 1;
      }
    }
  }

  countUp();

  $(window).scroll(function () {
    countUp();
  });

}); // jQuery ends here  