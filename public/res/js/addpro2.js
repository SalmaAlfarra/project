// Get the modal
var modal2 = document.getElementById("attach-pop");

// Get the button that opens the modal
var atthment = document.getElementById("atthment");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
var span2 = document.getElementsByClassName("closadd")[0];
var add1 = document.getElementById("add-f")
var myadd = document.getElementById("addinga");
var button = document.getElementById("buttndone");




atthment.onclick = function() {
    modal2.style.display = "block"; 
    myadd.style.display = "block"; 
    add1.style.display = "none";
}


button.onclick = function() {
    modal2.style.display = "block";
    myadd.style.display = "block";
    add1.style.display = "block"; 
 

}









// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
    modal2.style.display = "none";
  }