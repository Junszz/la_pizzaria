// global var
var slideIndex = 0;

// function gotoSlides(x){
//   // Update global var slideIndex
//   slideIndex = x;
//   console.log("Go to slides ", x); 
//   showSlides(slideIndex);
// }

function showSlides(index) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    // 0,1,2 -> len = 3
    // console.log(slides);

    // Hide all slides
    for (i = 0; i < slides.length;i++){
      // console.log(slides[i]," display set to none");
      slides[i].style.display = 'none';
    }


    slideIndex++;

    if(slideIndex > slides.length){
      slideIndex = 1;
    }
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides,2000);
}

