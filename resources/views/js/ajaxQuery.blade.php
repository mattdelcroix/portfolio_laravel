<script>

function AddViewerPhotos(photos){
  //Delete all div 'mySlides'
  var slides = document.querySelector('.slides');
  slides.innerHTML = "";

  //Create the news divs 'mySlides'
  //console.log(photos);
  for(var i=0; i<photos.length; i++){
    var photoNumber = i+1;
    //<div class="mySlides">
    var mySlides = document.createElement('div');
    mySlides.classList.add('mySlides');

    //<div class="numbertext">photoNumber / photos.length </div>
    var numberText = document.createElement('div');
    numberText.classList.add('numbertext');
    numberText.innerHTML = photoNumber + " / " + photos.length;

    //<img src="images/photoName.jpg" alt="image : photoNumber / photos.length ">
    var image = document.createElement('img');
    image.src="images/" + photos[i]['name'];
    image.alt="image : " + photoNumber + " / " + photos.length;

    //Add the news elements to the mySlides Div
    mySlides.appendChild(numberText);
    mySlides.appendChild(image);

    //Add the mySlide div to the slides div
    slides.appendChild(mySlides);
  }
  //Load the caption for the viewer.
  addSlidesCaption();

  //Refresh the display of the slideshow
  showSlides(slideIndex);
}

//Add the onClick evenement on the category buttons
$('.category').click(function(){
  //Set the URL to get the data from this route : getPhotoCategory/{category}
  var url = document.location.href;
  var domain  = url.substring( 0 ,url.lastIndexOf( "/" ) );
  var getPhotoCategory = domain + "/getPhotoCategory/" + this.innerHTML;
  console.log(getPhotoCategory);
  var photos;

  $.ajax({
    type: "GET",
    url: getPhotoCategory,
    success: function( response ) {
      photos = response;
      AddViewerPhotos(photos);
    }
  });
});

</script>
