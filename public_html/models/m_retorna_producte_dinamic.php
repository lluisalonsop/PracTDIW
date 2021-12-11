<?php
function consultaResultats($connexio){
  try{
    $sql = "SELECT p.Nombre, p.Foto, p.Precio, p.ID  
      FROM productos p ";
    $consulta = $connexio->prepare($sql);
    $consulta->execute();
    $resultats_producte_dinamic = $consulta->fetchAll(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
  echo "Error: " . $e->getMessage();
  }
  return($resultats_producte_dinamic);
 }
?>
