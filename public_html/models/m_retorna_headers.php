<?php
function consultaHeaders($connexio, $UID){
  try{
    $sql = "SELECT h.ID, h.Fecha
      FROM pedido_header h, usuarios u
      WHERE u.ID = h.Usuaris_ID";
    $consulta = $connexio->prepare($sql);
    $consulta->execute();
    $resultat = $consulta->fetchAll(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
	echo "Error: " . $e->getMessage();
  }
  return($resultat);
 }
?>
