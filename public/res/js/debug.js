var form = document.getElementById("form-c");
var form2 = document.getElementById("form-b");
var amount = document.getElementById("amount");
var delet = document.getElementById("delet");

var milestone = document.getElementById("By-milestone");
var li = document.getElementById("lii");
var addmil = document.getElementById("addmil");

form.onclick = function() {
    amount.style.display = "block";
    milestone.style.display = "none";

}
form2.onclick = function() {
    milestone.style.display = "block";
    amount.style.display = "none";

}
addmil.onclick = function() {
    li.style.display = "block";
}
delet.onclick = function() {
    li.style.display = "none";

}


