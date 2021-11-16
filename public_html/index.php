<?php
 $accio = $_GET['accio'];

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

 default:
 include __DIR__.'/resources/resource_portada.php';
 break;
 }
?>
