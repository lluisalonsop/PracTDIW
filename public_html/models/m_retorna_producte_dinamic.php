<?php
function consultaResultats($connexio){
  try{
    $sql = "SELECT p.Nombre, p.Foto, p.Precio  
      FROM productos p ";
    $consulta = $connexio->prepare($sql);
    $consulta->execute();
    $resultats_nom_categories = $consulta->fetchAll(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
  echo "Error: " . $e->getMessage();
  }
 }
?>
