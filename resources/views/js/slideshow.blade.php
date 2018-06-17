<script>
//Load the caption for the viewer.
function addSlidesCaption(){
  document.querySelector('.slides').innerHTML += "<a class='prev' onclick='plusSlides(-1)'>❮</a>";
  document.querySelector('.slides').innerHTML += "<a class='next' onclick='plusSlides(1)'>❯</a>";
  document.querySelector('.slides').innerHTML += "<div class='caption-container'><p id='caption'></p></div>";
}
addSlidesCaption();


var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  //var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  /*for (i = 0; i < dots.length; i++) {
  dots[i].className = dots[i].className.replace(" active", "");
}*/
slides[slideIndex-1].style.display = "block";
//console.log(slides[0].firstElementChild.nextElementSibling);
//dots[slideIndex-1].className += " active";
captionText.innerHTML = slides[slideIndex-1].firstElementChild.nextElementSibling.alt;
}
</script>
