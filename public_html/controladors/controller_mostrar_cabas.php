<?php 
	include __DIR__.'/../models/m_conecta_BD.php';
	$conn = conectaBD();
	include __DIR__.'/../models/m_retorna_producte_detall.php';
	include __DIR__.'/../vistes/view_mostrar_cabas.php';
?>
