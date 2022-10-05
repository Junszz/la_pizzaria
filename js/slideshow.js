// print default picture
var slideIndex = 1;
// prompt("Default values set to 1\n", "");
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);  
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1} // reset index back to 1
    if (n < 1) {slideIndex = slides.length} // reset index back to last
    // make sure other slides are being hidden
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    // make sure other slides are being hidden
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  }

