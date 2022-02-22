var Dispute = document.getElementById("Dispute");
var btn = document.getElementById("btn");
var close = document.getElementById("close");


btn.onclick = function() {
    Dispute.style.display = "block";
  }
  
  close.onclick = function() {
    Dispute.style.display = "none";
  }