var kuulid = document.getElementsByClassName("bead");
 window.onload = function () {
 
     for (var i = 0; i < kuulid.length; i++) {
         kuulid[i].onclick = function () {
             muudaFloati(this);
         }
     }
 
     function muudaFloati(kuul) {
         if (window.getComputedStyle(kuul).getPropertyValue("float") == "left"){
             kuul.style.cssFloat = "right";
         } else {
             kuul.style.cssFloat = "left";
         }
     }
 }