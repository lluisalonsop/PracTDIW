<?php
    include __DIR__.'/../models/m_conecta_BD.php';
    include __DIR__.'/../models/m_retorna_llista_productes.php';
    $categ = $_GET['categ'];
    $conn = conectaBD();
    $res = consultaResultats($conn, $categ);
     include __DIR__.'/../vistes/view_llistar_productes_simple.php';
?>
