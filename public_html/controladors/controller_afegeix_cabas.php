<?php
  if (session_status() === PHP_SESSION_NONE) {
 	session_start();
 }
 include __DIR__.'/../models/m_afegeix_cabas.php';
 $ID = $_GET['prod'];
 $PREU = $_GET['preu'];
 $NUM = $_GET['numero'];
 $PREU = $PREU * $NUM;
 add_to_cart($ID,$PREU,$NUM);
 include __DIR__.'/../vistes/view_ajax_mostrar_cistella.php';

?>
