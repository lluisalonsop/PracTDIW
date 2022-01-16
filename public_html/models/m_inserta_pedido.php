<?php
function InsertaPedido($connexio,$ID,$PID,$PedID,$Cantidad,$Precio, $Nombre){
  try{
    $sql = "INSERT INTO pedidos(ID, Producto_ID, Pedido_ID, Cantidad, Precio, Nombre)
    VALUES ('$ID','$PID','$PedID','$Cantidad','$Precio', '$Nombre')";
  $connexio->exec($sql);
  }
  catch(PDOException $e){
	echo "Error: " . $e->getMessage();
  }
 }
