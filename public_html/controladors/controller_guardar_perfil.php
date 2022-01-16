<?php
	if(session_id() == ''){
		session_start();
	}
	include __DIR__.'/../models/m_conecta_BD.php';
	include __DIR__.'/../models/m_valida_usuari.php';
	include __DIR__.'/../models/m_actualitza_informacio.php';
	$id = $_SESSION['logged'];
	$conn = conectaBD();
	$valors = array(
		"usuari" => $_POST['username'],
		"correu" => $_POST['correu'],
		"adreca" => $_POST['adreca'],
		"poblacio" => $_POST['poblacio'],
		"cpostal" => $_POST['codi_postal'],
		);
	$value = validaUsuariNoPwd();
	if ($value){
		if (isset($_FILES['profile_image']) && !empty($_FILES['profile_image'])){
			actualitzaBD($conn,$valors,$id);
		}
	}
	include __DIR__.'/../controladors/controller_editar_perfil.php';
?>
