<?php
function InsertaPedido($connexio,$ID,$PID,$PedID,$Cantidad,$Precio){
  try{
    $sql = "INSERT INTO pedidos(ID, Producto_ID, Pedido_ID, Cantidad, Precio)
    VALUES ('$ID','$PID','$PedID','$Cantidad','$Precio')";
  $conn->exec($sql);
  }
  catch(PDOException $e){
	echo "Error: " . $e->getMessage();
  }
  return($resultat_nom_categories);
 }
