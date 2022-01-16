<?php
	if(session_id() == ''){
		session_start();
	}
	include_once __DIR__.'/../models/m_conecta_BD.php';
	include_once __DIR__.'/../models/m_getuserinfo.php';
	$conn = conectaBD();
	$id = $_SESSION['logged'];
	$res = getUserInfo($conn,$id);
	include __DIR__.'/../vistes/view_edit_usuari.php';
?>
