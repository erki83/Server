window.onload = function () {
    var target = document.getElementById("rõngas");
 
     function seaUuedKoordinaadid(liigutatavObjekt) {
         var uusX = String(Math.floor(Math.random()*100))+"%";
         var uusY = String(Math.floor(Math.random()*100))+"%";
         liigutatavObjekt.style.left = uusX;
         liigutatavObjekt.style.top = uusY;
     }
 
     target.onclick = function () {
         seaUuedKoordinaadid(this);
     }
 }