function Buidaproduct(id,num,preu){
	location.href = "/public_html/index.php?accio=Destruir&id="+id+"&preu="+preu+"&num="+num;
}

function UpdateCesta(idproducte, preu) {
   console.log('HOLA');
   const xhttp = new XMLHttpRequest();
   xhttp.onload = function() {
    location.href = "/public_html/index.php?accio=mostrar-cabas";
   }
   var numero = document.getElementById("numero_"+idproducte+"_1").value;
   xhttp.open("GET", "/public_html/controladors/controller_afegeix_cabas.php?prod="+idproducte+"&preu="+preu+"&numero="+numero);
   xhttp.send();
}
function RestarCesta(idproducte, preu) {
   console.log('HOLA');
   const xhttp = new XMLHttpRequest();
   xhttp.onload = function() {
    location.href = "/public_html/index.php?accio=mostrar-cabas";
   }
   var numero = document.getElementById("numero_"+idproducte+"_2").value;
   xhttp.open("GET", "/public_html/controladors/controller_treure_cabas.php?prod="+idproducte+"&preu="+preu+"&numero="+numero);
   xhttp.send();
}
