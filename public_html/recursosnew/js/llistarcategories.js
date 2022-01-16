 function MostrarProductes(idcategoria) {
   const xhttp = new XMLHttpRequest();
   xhttp.onload = function() {
   	document.getElementById("replace").innerHTML = this.responseText;
   }
   xhttp.open("GET", "/public_html/controladors/controller_llista_productes_simples.php?categ="+idcategoria);
   xhttp.send();
}

function MostrarProduct(idproducte) {
   const xhttp = new XMLHttpRequest();
   xhttp.onload = function() {
   	document.getElementById("replace").innerHTML = this.responseText;
   }
   xhttp.open("GET", "/public_html/controladors/controller_ajax_mostrar_producte.php?prod="+idproducte);
   xhttp.send();
}

function UpdateCesta(idproducte, preu) {
   console.log('HOLA');
   const xhttp = new XMLHttpRequest();
   xhttp.onload = function() {
    document.getElementById("cesta").innerHTML = this.responseText;
    location.href = "/public_html/index.php?accio=llistar-categories";
   }
   var numero = document.getElementById("numero").value;
   xhttp.open("GET", "/public_html/controladors/controller_afegeix_cabas.php?prod="+idproducte+"&preu="+preu+"&numero="+numero);
   xhttp.send();
}
