// Get the modal
var modal1 = document.getElementById("myModal1");

// Get the button that opens the modal
var btn = document.getElementById("add-Image");
var btn2 = document.getElementById("Video");
var btn3 = document.getElementById("Text");
var btn4 = document.getElementById("D");


var addtext =document.getElementById("add-text");

var text1 = document.getElementById ("text-add");

var vedio1 = document.getElementById("addvedio");
var addvedio = document.getElementById("Video1");

var image = document.getElementById("Image1");
var myimg = document.getElementById("img-add")

var d3= document.getElementById("add-3d");
var add3d= document.getElementById("TD-add");


// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal1.style.display = "block";
  text1.style.display = "none";
  myimg.style.display = "inline-block";
  vedio1.style.display = "none";
  d3.style.display = "none";

}

btn2.onclick = function() {
   modal1.style.display = "block";
  myimg.style.display = "none";
  text1.style.display = "none";
  vedio1.style.display = "inline-block";
  d3.style.display = "none";
}

btn3.onclick = function() {
  modal1.style.display = "block";
  myimg.style.display = "none";
  text.style.display = "inline-block";
  vedio1.style.display = "none";
  d3.style.display = "none";
}

btn4.onclick = function() {
  modal1.style.display = "block";
  myimg.style.display = "none";
  text1.style.display = "none";
  vedio1.style.display = "none";
  d3.style.display = "inline-block";
}

image.onclick = function() {
  modal1.style.display = "block";
  text1.style.display = "none";
  myimg.style.display = "inline-block";
  vedio1.style.display = "none";
  d3.style.display = "none";

}

addvedio.onclick = function() {
  modal1.style.display = "block";
  myimg.style.display = "none";
  text1.style.display = "none";
  vedio1.style.display = "inline-block";
  d3.style.display = "none";

}


addtext.onclick = function() {
  modal1.style.display = "block";
  myimg.style.display = "none";
  text1.style.display = "inline-block";
  d3.style.display = "none";
  vedio1.style.display = "none";


}

add3d.onclick = function() {
  modal1.style.display = "block";
  myimg.style.display = "none";
  text1.style.display = "none";
  vedio1.style.display = "none";
  d3.style.display = "inline-block";
}



// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal1.style.display = "none";
}

