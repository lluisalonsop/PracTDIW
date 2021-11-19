<?php
function consultaResultats($connexio, $categoria){
  try{
    $sql = "SELECT p.Nombre, p.Foto, p.Precio  
      FROM  productos p
      WHERE p.Categoria_ID = $categoria";
    $consulta = $connexio->prepare($sql);
    $consulta->execute();
    $resultat_productes_simple = $consulta->fetchAll(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
	echo "Error: " . $e->getMessage();
  }
  return($resultat_productes_simple);
 }
?>
