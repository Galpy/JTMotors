
var slideIndex = 1;
showSlides3(slideIndex);

// Next/previous controls
function plusSlides3(n) {
  showSlides3(slideIndex += n);
}

// Thumbnail image controls
function currentSlide3(n) {
  showSlides3(slideIndex = n);
}

function showSlides3(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides3");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  
  slides[slideIndex-1].style.display = "block";
}