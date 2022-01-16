<?php
function consultaPedidos($connexio,$HID){
  try{
    $sql = "SELECT ped.Nombre, ped.Precio, ped.Cantidad, prod.Foto, ped.ID
      FROM pedidos ped, pedido_header h , productos prod
      WHERE ped.Pedido_ID = h.ID AND prod.ID = ped.Producto_ID AND h.ID = ".$HID;
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
