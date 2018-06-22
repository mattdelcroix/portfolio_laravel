<script>
//Load the caption for the viewer.
function addSlidesCaption(){
  //If there are some photos, we can add the caption bar and the slides selectors
  var gridRow = document.querySelector('.gridRow');
  var gridRowHaveNodes = gridRow.hasChildNodes() ? true : false;

  //If there are some photos, we can add the caption bar and the slides selectors.
  //Else, we add a message in header1 html element
  if(!gridRowHaveNodes || (gridRow.childNodes.length == 1 && gridRow.childNodes[0].nodeName == "#text")){
    gridRow.innerHTML += "<h1>Sorry! No photos to display!</h1>";
  }
}
addSlidesCaption();

//Functions to display the photo slideshow
//Initialisation of the slideshow for the first photo
/*var slideIndex = 1;
showSlides(slideIndex);*/

//PlusSlide scopes the slideshow on the next or previous photo:
//plusSlide(1) or plusSlide(-1)
/*function plusSlides(n) {
  showSlides(slideIndex += n);
}*/
/*
function currentSlide(n) {
  showSlides(slideIndex = n);
}*/

//Display the photo in the slideShow
/*function showSlides(n) {
  var i;
  var slides = document.querySelectorAll(".mySlides");
  var captionText = document.getElementById("caption");

  //If it is the last photo, we go back to the first photo
  if (n > slides.length) {slideIndex = 1}
  //If it is the first photo and we want to switch left, we go to the last photo
  if (n < 1) {slideIndex = slides.length}
  //For each slide, we set the display to "none"
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  //If it exists at least one photo, we display it.
  if(slides.length > 0){
    var photo = slides[slideIndex - 1];
    photo.style.display = "block";
    //We initialize the caption.
    captionText.innerHTML = slides[slideIndex - 1].firstElementChild.nextElementSibling.alt;
  }
}*/
</script>
