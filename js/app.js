// Function for smooth scrolling
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});



// Fading function
$(document).ready(function() {
$(window).fadeThis();
});



// JavaScript for full-height page
// global vars
var winHeight = $(window).height();

// set initial div height
$('#general').css({
  'height': winHeight,
});

// make sure div stays full height on resize
$(window).resize(function(){
  $('#general').css({
    'height': winHeight,
  });
});
