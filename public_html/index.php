<?php
 echo "<script>console.log('ENTRA PHP');</script>";
 if (session_id() == ""){
 	session_start();
 	$_SESSION['cistella'] = array();
 	$_SESSION['cistella']['items'] = array();
 }
 $accio = $_GET['accio'];
 if (!isset($accio))
    {
        $accio = $_POST['accio'];
    }

    
 switch ($accio) {
 case 'llistar-categories':
 include __DIR__.'/resources/resource_llistar_categories.php';
 break;

 case 'llistar-productes':
 include __DIR__.'/resources/resource_llistar_productes.php';
 break;

 case 'mostrar-producte':
 include __DIR__.'/resources/resource_mostrar_producte.php';
 break;
 case 'Afegeix-al-cabàs':
 echo "<script>console.log('ENTRA CABAS');</script>";
 include __DIR__.'/resources/resource_afegeix_cabas.php';
 break;
 case 'login':
 include __DIR__.'/resources/resource_mostrar_login.php';
 break;
 case 'setlogin':
 echo "<script>console.log('ENTRA LOGIN');</script>";
 include __DIR__.'/resources/resource_set_login.php';
 break;
 case 'Registrar':
 include __DIR__.'/resources/resource_registre.php';
 break;

 default:
 include __DIR__.'/resources/resource_portada.php';
 break;
 }
?>
