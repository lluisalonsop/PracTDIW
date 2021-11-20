<?php
function consultaResultats($connexio, $prod){
  try{
    $sql = "SELECT p.Nombre, p.Descripcion, p.Foto, p.Precio  
      FROM productos p 
      WHERE p.ID = $prod";
    $consulta = $connexio->prepare($sql);
    $consulta->execute();
    $resultats_nom_categories = $consulta->fetchAll(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
  echo "Error: " . $e->getMessage();
  }
 }
?>
