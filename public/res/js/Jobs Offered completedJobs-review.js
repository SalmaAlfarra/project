var Dispute = document.getElementById("review");
var btn = document.getElementById("btn");
var close = document.getElementById("close-r");


btn.onclick = function() {
    Dispute.style.display = "block";
  }
  
  close.onclick = function() {
    Dispute.style.display = "none";
  }