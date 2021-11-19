<?php
    include __DIR__.'/../models/m_conecta_BD.php';
    include __DIR__.'/../models/m_retorna_llista_productes';

    $conn = conectaBD();
    $res = consultaResultats($conn);

     include __DIR__.'/../vistes/view_llistar_productes_simple.php';
?>
