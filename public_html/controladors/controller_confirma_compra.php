<?php
 include __DIR__.'/../models/m_conecta_BD.php';
 include __DIR__.'/../models/m_inserta_header.php';
 include __DIR__.'/../models/m_inserta_pedido.php';
 $conn = conectaBD();


 InsertaHeader($connexio,$HID,$UID,$Fecha,$Importe_Total,$Total_Elementos)


 InsertaPedido($connexio,$ID,$PID,$HID,$Cantidad,$Precio)
 include __DIR__.'/../vistes/view_confirma_compra.php';

?>
