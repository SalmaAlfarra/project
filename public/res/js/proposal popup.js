var popup = document.getElementById("popup");
var btn = document.getElementById("btn");
var close = document.getElementById("close-r");


btn.onclick = function() {
    popup.style.display = "block";
  }
  
  close.onclick = function() {
    popup.style.display = "none";
  }