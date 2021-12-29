<?php
    echo "<script>console.log('LLEGADO');</script>";	
    include __DIR__.'/../models/m_conecta_BD.php';
    include __DIR__.'/../models/m_login.php';
    $conn = conectaBD();
    $Nombre = $_POST['u'];
    $Clau = $_POST['uclau'];
    $logged = @comprovaUsuari($conn, $Nombre, $Clau);
    if ($logged == true){
    	 echo "<script>console.log('Correcto');</script>";
       $_SESSION['logged'] = true;
    }else{
          echo "<script>console.log('Incorrecto');</script>";
          $_SESSION['logged'] = false;
    }
    include __DIR__.'/../vistes/view_mostrar_login.php';
?>
