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
 include __DIR__.'/controlador/mostrar_producte.php';
 break;

 default:
 include __DIR__.'/controladors/controller_portada.php';
 break;
 }
?>
