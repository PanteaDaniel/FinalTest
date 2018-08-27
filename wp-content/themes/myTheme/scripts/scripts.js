//sticky menu
var active = 'sector1bg';
window.onload = function() {make_sticky()};
window.onscroll = function() {make_sticky()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
var activeItem = document.getElementsByClassName("active");
var content = document.getElementById("content");

function makeActive(id)
{
  var navitems = document.getElementsByClassName("navitem");
  for (var i = 0; i < navitems.length; i++)
  {

    if(navitems[i].id == id)
    {
      navitems[i].classList.add("active", "active-fixed");
    }
    else
      navitems[i].classList.remove("active", "active-fixed");
  }
}
function addMenuPadding(id)
{
  document.getElementById(id).style.paddingTop = "160px";
  active=id;
}
function removeMenuPadding(id)
{

  document.getElementById(id).style.paddingTop = "80px"
}

function make_sticky() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    content.classList.add("menupadd");
    activeItem[0].classList.remove("active-absolute");
    activeItem[0].classList.add("active-fixed");

  } else {

    navbar.classList.remove("sticky");
    content.classList.remove("menupadd");

      activeItem[0].classList.remove("active-fixed");
      activeItem[0].classList.add("active-absolute");


  }
}

//Parsley
window.Parsley.addValidator('name', {
validateString: function(value) {
  var patt = new RegExp("^[a-zA-Z\s]+$");
  return patt.test(value);
},
messages: {
  en:'You Can Only Use Letters'
}
});
window.Parsley.addValidator('phone', {
validateString: function(value) {
  var patt = /^(\([0-9]{3}\) | [0-9]{3}-)[0-9]{3}-[0-9]{4}$/g;
  return patt.test(value);
},
messages: {
  en:'The phone number must have a US format'
}
});

$(document).ready(function(){
  $('.logo-slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    speed: 300,
    dots:false,
    arrows:false,
    autoplay: true,
    autoplaySpeed:2000,
    responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
  });
});


//Popup
function closePopup()
{
  document.getElementById("popupContainer").style.display="none";
}
function openPopup()
{
  document.getElementById("popupContainer").style.display="block";
}
$('.close-video').click(function(){
$('.video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
});
$('.play-btn').click(function(){
	$('.video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
});
$(document).mouseup(function(e)
{
    var container = $("#popupContainer");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0)
    {
        container.hide();
        $('.video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*')
    }
});


/*$(window).scroll(function() {
   var hT = $('#sector1bg').offset().top,
       hH = $('#sector1bg').outerHeight(),
       wH = $(window).height(),
       wS = $(this).scrollTop();
   if (wS > (hT+hH-wH)){
     makeActive('sect1');
   }
});
$(window).scroll(function() {
   var hT = $('#sector2bg').offset().top,
       hH = $('#sector2bg').outerHeight(),
       wH = $(window).height(),
       wS = $(this).scrollTop();
   if (wS > (hT+hH-wH)){
     makeActive('sect2');
   }
});
$(window).scroll(function() {
   var hT = $('#sector3bg').offset().top,
       hH = $('#sector3bg').outerHeight(),
       wH = $(window).height(),
       wS = $(this).scrollTop();
   if (wS > (hT+hH-wH)){
       makeActive('sect3');
   }
});*/


$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};
$(window).on('resize scroll', function() {

    if ($('#sector3bg').isInViewport())
        makeActive('sect3');
    if ($('#sector2bg').isInViewport())
        makeActive('sect2');
    if ($('#sector1bg').isInViewport())
        makeActive('sect1');
});
