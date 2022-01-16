<?php
 session_start();
 include __DIR__.'/../models/m_treure_cabas.php';
 $ID = $_GET['prod'];
 $PREU = $_GET['preu'];
 $NUM = $_GET['numero'];
 $PREU = $PREU * $NUM;
 if ($NUM == $_SESSION['cistella']['items'][$ID]){
 	 header('Location: http://127.0.0.1/public_html/index.php?accio=Destruir&id='.$ID.'&preu='.$_GET['preu'].'&num='.$NUM.'');
 }
 else{
 	remove_to_cart($ID,$PREU,$NUM);
	include __DIR__.'/../vistes/view_ajax_mostrar_cistella.php';
 }
?>
