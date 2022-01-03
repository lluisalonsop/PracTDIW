<?php
function InsertaHeader($connexio,$HID,$UID,$Fecha,$Importe_Total,$Total_Elementos){
  try{
    $sql = "INSERT INTO pedido_header(ID, Usuaris_ID, Fecha, Importe_Total, Total_Elementos)
    VALUES ('$HID','$UID','$Fecha','$Importe_Total','$Total_Elementos')";
  $connexio->exec($sql);
  }
  catch(PDOException $e){
	echo "Error: " . $e->getMessage();
  }
 }
?>