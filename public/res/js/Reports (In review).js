var detals = document.getElementById("detals");
var titel = document.getElementById("titel");
var hide = document.getElementById("hide");

titel.onclick = function() {
    detals.style.display = "block";
    hide.style.display = "block";
}
hide.onclick = function() {
    detals.style.display = "none";
    hide.style.display = "none";
}