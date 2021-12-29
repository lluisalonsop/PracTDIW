 function MostrarProductes(idcategoria) {
   const xhttp = new XMLHttpRequest();
   xhttp.onload = function() {
   	document.getElementById("replace").innerHTML = this.responseText;
   }
   console.log('HOLA');
   xhttp.open("GET", "/public_html/controladors/controller_llista_productes_simples.php?categ="+idcategoria);
   xhttp.send();
}

function MostrarProduct(idproducte) {
   const xhttp = new XMLHttpRequest();
   xhttp.onload = function() {
   	document.getElementById("replace").innerHTML = this.responseText;
   }
   console.log('HOLA');
   xhttp.open("GET", "/public_html/controladors/controller_ajax_mostrar_producte.php?prod="+idproducte);
   xhttp.send();
}
