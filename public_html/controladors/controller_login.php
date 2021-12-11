<?php
    include __DIR__.'/../models/m_conecta_BD.php';
    include __DIR__.'/../models/m_login.php';
    $conn = conectaBD();
    $Nombre = $_POST['u'];
    $Clau = $_POST['uclau'];
    $Clau = password_hash($Clau, PASSWORD_DEFAULT);
    $logged = comprovaUsuari($conn, $Nombre, $Clau);
    include __DIR__.'/../vistes/view_mostrar_login.php';
?>