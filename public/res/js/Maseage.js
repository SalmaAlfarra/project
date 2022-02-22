function viewbutton(){

    var testElement = document.getElementById('file-div');
    
    var button_div = testElement.classList.contains('show-button');
    
    if (button_div) {
    
    testElement.classList.remove("show-button");
    }else{
    
    testElement.classList.add("show-button");
    }
    
    }