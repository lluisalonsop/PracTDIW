<?php
 include __DIR__.'/../models/m_conecta_BD.php';
 include __DIR__.'/../models/m_retorna_producte_detall.php';

 $ID = $_POST['prod'];
 $conn = conectaBD();
 $res = consultaResultats($conn, $ID);
?>
