var Post = document.getElementById("Post1");
var btn = document.getElementById("btn");
var close = document.getElementById("close-r");


btn.onclick = function() {
    Post.style.display = "block";
  }
  
  close.onclick = function() {
    Post.style.display = "none";
  }