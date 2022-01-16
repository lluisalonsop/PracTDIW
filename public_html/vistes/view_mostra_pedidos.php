<?php 
	echo '<br/>';
	echo '<div id ="'.$p_data['ID'].'">';
	echo "<div>";
	echo '<a> <img src="'.$p_data["Foto"].'";/></a>';
	echo '<p> Nom del producte:  '.$p_data['Nombre'].' </p>';
	echo '<p> Numero de productes '.$p_data['Nombre'].':  '.$p_data['Cantidad'].'</p>';
	echo '<p> Subpreu total: '.$p_data['Precio'].'</p>';
	echo '</div>';
	$total = $total + $p_data['Precio'];

?>
