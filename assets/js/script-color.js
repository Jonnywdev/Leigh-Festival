header = document.getElementByClassName("header-is-wrapped");

// scroll down backround changer
window.onscroll = function() {scrollColorChange()};

function scrollColorChange() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
   header.addClass("active");
  } else {
    header.removeClass("active");
  }
}

function scrollColorChange() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}