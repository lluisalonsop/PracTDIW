<?php
 $accio = $_GET['accio'];

 switch ($accio) {
 case 'llistar-categories':
 include __DIR__.'/recursos/resource_llistar_categories.php';
 break;

 case 'llistar-productes':
 include __DIR__.'/recursos/resource_llistar_productes.php';
 break;

 case 'mostrar-producte':
 include __DIR__.'/recursos/resource_mostrar_producte.php';
 break;

 default:
 include __DIR__.'/recursos/resource_portada.php';
 break;
 }
?>