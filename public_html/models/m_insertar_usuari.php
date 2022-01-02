<?php 
function insertaUsuari($conn, $user_id,$Nombre,$CPostal,$Adreca,$Correu,$Poblacio,$Clau){
$sql = "INSERT INTO usuarios(ID, Nombre, Codigo_Postal, Direccion, Correo_Electronico,Poblacion,Password)
VALUES ('$user_id','$Nombre','$CPostal','$Adreca','$Correu','$Poblacio','$Clau')";
$conn->exec($sql);
}
?>