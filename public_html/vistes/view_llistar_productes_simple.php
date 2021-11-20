<?php 
	echo '<br/>';
	echo '<div id ="replace">';
	foreach($res as $p_data){
	echo "<div>";
	echo '<a> <img src="'.$p_data["Foto"].'";/></a>';
	echo '<p onclick="MostrarProducte('.$p_data["ID"].')">'.$p_data['Nombre'].' </p>';
	echo '<p>'.$p_data['Precio'].'</p>';
	echo '</div>';
	}
	echo '</div>';
?>
