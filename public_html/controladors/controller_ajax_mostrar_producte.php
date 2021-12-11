<?php
    include __DIR__.'/../models/m_conecta_BD.php';
    include __DIR__.'/../models/m_retorna_producte_detall.php';

    $prod = $_GET['prod'];
    $conn = conectaBD();
    $res = consultaResultats($conn, $prod);

     include __DIR__.'/../vistes/view_ajax_mostrar_producte.php';
?>
