 function myFunction(dolor) {
   document.getElementById("1").style.color = "red";
   const xhttp = new XMLHttpRequest();
   xhttp.onload = function() {
   	document.getElementById("replace").innerHTML = this.responseText;
   }
   console.log('HOLA');
   xhttp.open("GET", "/public_html/controladors/controller_llista_productes_simples.php?categ="+dolor);
   xhttp.send();
}
