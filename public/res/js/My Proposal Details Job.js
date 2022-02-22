var Btn = document.getElementById("mypro");
var mode = document.getElementById("myModal");
var close = document.getElementsByClassName("close")[0];
Btn.onclick = function() {
    mode.style.display = "block";
}
close.onclick = function() {
    mode.style.display = "none";
}