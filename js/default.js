var nav = document.getElementById('site-navigation');
var sticky = nav.offsetTop;

function stickyNav() {
  if (window.pageYOffset > sticky) {
    nav.classList.add("sticky");
  } else {
    nav.classList.remove("sticky");
  }
}

window.onscroll = function() {stickyNav()};

$(function(){
    var slider = $('#clientsSlider');
    var clients = slider.children().length;

    var rotating = true;
    var clientspeed = 0;
    var seeclients = setInterval(rotateClients, clientspeed);

    $(document).on({
        mouseenter: function(){
            rotating = false;
        },
        mouseleave: function(){
            rotating = true;
        }
    }, '#clientsSlider');

    function rotateClients() {
        if(rotating != false) {
            var $first = $('#clientsSlider li:first');

            $first.animate({ 'margin-left': '-100vw' }, 30000, "linear", function() {
                $first.remove().css({ 'margin-left': '-20px' });
                $('#clientsSlider li:last').after($first);
            });
        }
    }
});

$(document).ready(function(){
  $('.customer-logos').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: false,
    dots: false,
    pauseOnHover: true,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 3
      }
    }]
  });
});
