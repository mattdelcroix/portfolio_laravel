//Add the events only on the "unselected" elements.
var unselected = document.querySelectorAll(".unselected"); //5 elements
unselected.forEach(function(element){
  element.addEventListener("mouseover", urlActiveIcon);
  element.addEventListener("mouseout", urlDesactiveIcon);
});

//Add the onClick envent on all category's images
var images = document.querySelectorAll(".category img");

images.forEach(function(img){
  img.addEventListener('click', function(){
    //Toggle the "select" class into 'unselected'class on the selected element
    var selectedElement = document.querySelector(".selected");
    selectedElement.classList.remove("selected");
    selectedElement.classList.add("unselected");
      //Add the mouse's events to this element.
      selectedElement.addEventListener("mouseover", urlActiveIcon);
      selectedElement.addEventListener("mouseout", urlDesactiveIcon);
      //switch back to the unselected icon
      selectedElement.src = selectedElement.src.replace(/1/i, '0').toString();

    //Add the "selected" class on the clicked element
    this.classList.remove("unselected");
    this.classList.add("selected");
      //Remove the mouse's events on the clicked element.
      this.removeEventListener("mouseover", urlActiveIcon);
      this.removeEventListener("mouseout", urlDesactiveIcon);
  });
});


//change the URL for the src (mountains0.png to mountains1.png) and return it
function urlActiveIcon(e){
  console.log(e);
  if(e.target.src.endsWith("0.png")){
    e.target.src = e.target.src.replace(/0/i, '1').toString();
  }
}

//change the URL for the src (mountains1.png to mountains0.png) and return it
function urlDesactiveIcon(e){
  console.log(e);
  if(e.target.src.endsWith("1.png")){
    e.target.src = e.target.src.replace(/1/i, '0').toString();
  }
}
