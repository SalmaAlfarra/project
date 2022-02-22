var more = document.getElementById("mor");

// Get the <span> element that closes the modal
var seemore = document.getElementById("see-more");

mor.onclick = function() {
    seemore.style.display = "block";
}
function viewbutton(){

    var testElement = document.getElementById('file-div');
    
    var button_div = testElement.classList.contains('show-button');
    
    if (button_div) {
    
    testElement.classList.remove("show-button");
    }else{
    
    testElement.classList.add("show-button");
    }
    
    }
