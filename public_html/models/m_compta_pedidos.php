<?php
function comptaPedidos($connexio){
  try{
    $sql = "SELECT count(*) as num  
      FROM  pedidos";
    $consulta = $connexio->prepare($sql);
    $consulta->execute();
    $num_usuaris = $consulta->fetchAll(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
	echo "Error: " . $e->getMessage();
  }
  return($num_usuaris[0]['num']);
 }
?>