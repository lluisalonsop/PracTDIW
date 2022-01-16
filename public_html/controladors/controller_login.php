<?php
    echo "<script>console.log('LLEGADO');</script>";	
    include __DIR__.'/../models/m_conecta_BD.php';
    include __DIR__.'/../models/m_login.php';
    $conn = conectaBD();
    $Nombre = $_POST['u'];
    $Clau = $_POST['uclau'];
    $res = @comprovaUsuari($conn, $Nombre, $Clau);
    if ($res['0'] == true){
    	 echo "<script>console.log('Correcto');</script>";
       $_SESSION['logged'] = $res['1'];
    }else{
          echo "<script>console.log('Incorrecto');</script>";
          $_SESSION['logged'] = -1;
    }
    include __DIR__.'/../vistes/view_mostrar_login.php';
?>
