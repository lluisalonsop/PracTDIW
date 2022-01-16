<?php
	$id = $_GET['id'];
 	$num = $_GET['num'];
 	$preu = intval($_GET['preu']);
 	 echo '<script>console.log('.$_GET['preu'].');</script>';
 	$preu = $preu * $num;
 	unset($_SESSION['cistella']['items'][$id]);
 	$_SESSION['cistella']['n_items'] = $_SESSION['cistella']['n_items'] - $num;
 	$_SESSION['cistella']['preu'] = $_SESSION['cistella']['preu'] - $preu;
 	$_GET['accio'] = "mostrar-cabas";
 	header("LOCATION: http://127.0.0.1/public_html/index.php?accio=mostrar-cabas");
?>
