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
                $first.remove().css({ 'margin-left': '0px' });
                $('#clientsSlider li:last').after($first);
            });
        }
    }
});
