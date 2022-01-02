<?php
    include __DIR__.'/../models/m_conecta_BD.php';
    include __DIR__.'/../models/m_compta_usuaris.php';
    include __DIR__.'/../models/m_valida_usuari.php';
    $conn = conectaBD();
    $user_id = comptaUsuaris($conn)+1;
    $check = validaUsuari();

    if($check)
       {
            $Nombre = $_POST['username'];
            $Correu = $_POST['correu'];
            $Clau = $_POST['clau'];
            $Clau = password_hash($Clau, PASSWORD_DEFAULT);
            $Adreca = $_POST['adreca'];
            $Poblacio = $_POST['poblacio'];
            $CPostal = $_POST['codi_postal'];
            include __DIR__.'/../models/m_insertar_usuari.php';
            insertaUsuari($conn, $user_id,$Nombre,$CPostal,$Adreca,$Correu,$Poblacio,$Clau);
            include __DIR__.'/../vistes/view_mostrar_login.php';
       } 

?>
