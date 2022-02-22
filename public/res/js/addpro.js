// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var cont = document.getElementById("butt1");

// Get the <span> element that closes the modal
var close1 = document.getElementsByClassName("close1")[0];


// When the user clicks on the button, open the modal
cont.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
close1.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
