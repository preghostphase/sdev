console.log('init')

// using javascript

document.getElementById("navToggle").addEventListener("click", toggleNav);

function toggleNav() {
  var nav = document.getElementById("nav");
  var navToggle = document.getElementById("navToggle");
  nav.classList.toggle("__active");
  navToggle.classList.toggle("__active");
}

// using jquery
 
$(document).ready(function() {
  if (screen.width < 992) {
  }
  else {
    $(window).scroll(function() {
      var height = $(window).scrollTop();
      if(height  > 400) {
          $('.header').addClass('__hide');
      }
      else{
        $('.header').removeClass('__hide');
      }
    });
  }
});
