var Btn = document.getElementById("Withdraw");
var mode = document.getElementById("method");
var close = document.getElementsByClassName("close")[0];
function viewbutton(){

    var testElement = document.getElementById('file-div');
    
    var button_div = testElement.classList.contains('show-button');
    
    if (button_div) {
    
    testElement.classList.remove("show-button");
    }else{
    
    testElement.classList.add("show-button");
    }
    
    }
Btn.onclick = function() {
    mode.style.display = "flex";
}
close.onclick = function() {
    mode.style.display = "none";
}