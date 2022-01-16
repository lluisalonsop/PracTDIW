<?php
    include __DIR__.'/../models/m_conecta_BD.php';
    include __DIR__.'/../models/m_retorna_noms_categories.php';

    $conn = conectaBD();
    $res = consultaResultats($conn);

     include __DIR__.'/../vistes/view_llistar_categories.php';
?>
