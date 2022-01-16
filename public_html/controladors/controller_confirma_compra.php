<?php
 @session_start();
 include __DIR__.'/../models/m_conecta_BD.php';
 include __DIR__.'/../models/m_inserta_header.php';
 include __DIR__.'/../models/m_inserta_pedido.php';
 include __DIR__.'/../models/m_compta_pedidos.php';
 include __DIR__.'/../models/m_compta_headers.php';
 include __DIR__.'/../models/m_retorna_producte_detall.php';
 $connexio = conectaBD();
 $UID = $_SESSION['logged'];
 $HID = comptaHeaders($connexio)+1;
 $PedID = comptaPedidos($connexio)+1;
 $Fecha = date("d/m/Y");
 $Importe_Total = $_SESSION['cistella']['preu'];
 $Total_Elementos = $_SESSION['cistella']['n_items'];
 InsertaHeader($connexio,$HID,$UID,$Fecha,$Importe_Total,$Total_Elementos);
    
 $ALL_ITEMS = $_SESSION['cistella']['items'];
 foreach($ALL_ITEMS as $numprod)
        {   
            $id = key($ALL_ITEMS);
            $resultats = consultaResultats($connexio, $id);
            $PID = $resultats[0]['ID'];
            $Cantidad = $_SESSION['cistella']['items'][$PID];
            $Precio = ($Cantidad * $resultats[0]['Precio']);
            $Nombre = $resultats[0]['Nombre'];
            InsertaPedido($connexio,$PedID,$PID,$HID,$Cantidad,$Precio, $Nombre);
            next($ALL_ITEMS);
        } 
 $_SESSION['cistella'] = array();
 $_SESSION['cistella']['items'] = array();
 $_SESSION['cistella']['n_items'] = 0;
 $_SESSION['cistella']['preu'] = 0;
 include __DIR__.'/../vistes/view_confirma_compra.html';

?>
