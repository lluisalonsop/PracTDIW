<?php
 $accio = $_GET['accio'];

 switch ($accio) {
 case 'llistar-categories':
 include __DIR__.'/controladors/controller_categories.php';;
 break;

 case 'llistar-productes':
 include __DIR__.'/controladors/llistar_productes.php';
 break;

 case 'mostrar-producte':
 include __DIR__.'/controladors/controller_producte.php';
 break;

 case 'login':
 include __DIR__.'/controladors/controller_login.php';
 break;

 default:
 include __DIR__.'/controladors/controller_portada.php';
 break;
 }
?>
