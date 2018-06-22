<script>

function AddViewerPhotos(photos){
  //Delete all div 'mySlides'
  var row = document.querySelector('.gridRow');
  row.innerHTML = "";

  //Create the news divs 'column' which displays the photos
  //console.log(photos);
  for(var i=0; i<photos.length; i++){
    var photoNumber = i+1;
    //<div class="column">
    var column = document.createElement('div');
    column.classList.add('column');

    //<div class="content">
    var content = document.createElement('div');
    content.classList.add('content');

    //<img src="images/photoName.jpg" alt="image : photoNumber / photos.length ">
    var image = document.createElement('img');
    image.src="images/" + photos[i]['name'];
    image.alt="image : " + photoNumber + " / " + photos.length;
    image.style.width = "100%";

    //Add the image element to the content Div
    content.appendChild(image);

    //Add the content element to the column Div
    column.appendChild(content);

    //Add the column div to the row div
    row.appendChild(column);
  }
  //Load the caption for the viewer.
  //addSlidesCaption();
  //Is the grid empty ?
  var gridRowHaveNodes = row.hasChildNodes() ? true : false;

  //If there are some photos, we can add the caption bar and the slides selectors.
  //Else, we add a message in header1 html element
  if(!gridRowHaveNodes || (row.childNodes.length == 1 && row.childNodes[0].nodeName == "#text")){
    row.innerHTML += "<h1>Sorry! No photos to display!</h1>";
  }

  //Set the modal parameters
  setModal();

  //Refresh the display of the slideshow
  //showSlides(slideIndex);
}

//Add the onClick evenement on the category buttons
$('.category img').click(function(){
  //Set the URL to get the data from this route : getPhotoCategory/{category}
  var url = document.location.href;
  var domain  = url.substring( 0 ,url.lastIndexOf( "/" ) );
  var getPhotoCategory = domain + "/getPhotoCategory/" + this.alt;
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
