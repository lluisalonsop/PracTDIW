<?php 
function insertaUsuari($conn, $user_id,$Nombre,$CPostal,$Adreca,$Correu,$Poblacio,$Clau){
$sql = "INSERT INTO usuarios(ID, Nombre, Codigo_Postal, Direccion, Correo_Electronico,Poblacion,Password)
VALUES ('$user_id','$Nombre','$CPostal','$Adreca','$Correu','$Poblacio','$Clau')";
$aux = copy("/opt/lampp/htdocs/public_html/recursosnew/img/usuari.jpg","/opt/lampp/htdocs/public_html/recursosnew/img/2");
 echo '<script>console.log('.$aux.');</script>';
$conn->exec($sql);
}
?>
