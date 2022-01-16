<?php
function getUserInfo($connexio,$id){
  try{
    $sql = "SELECT u.Nombre, u.Codigo_Postal, u.Direccion, u.Correo_Electronico, u.Poblacion  
      FROM usuarios u 
      WHERE u.ID = $id";
    $consulta = $connexio->prepare($sql);
    $consulta->execute();
    $resultats_user_info = $consulta->fetchAll(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
  echo "Error: " . $e->getMessage();
  }
  return($resultats_user_info);
 }
?>
