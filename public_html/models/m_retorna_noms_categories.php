<?php
function consultaResultats($connexio){
  try{
    $sql = "SELECT c.ID, c.Nombre, p.Foto  
      FROM categorias c, productos p 
      WHERE c.ID = p.Categoria_ID
      GROUP BY p.Categoria_ID";
    $consulta = $connexio->prepare($sql);
    $consulta->execute();
    $resultat_nom_categories = $consulta->fetchAll(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
	echo "Error: " . $e->getMessage();
  }
  return($resultat_nom_categories);
 }
?>
